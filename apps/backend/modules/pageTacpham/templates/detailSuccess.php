<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/26/15
 * Time: 3:30 PM
 */
//var_dump($tacpham);die;
?>
<?php
include_partial('tmcTwitterBootstrap/assets');
include_component('tmcTwitterBootstrap', 'header');
?>
<?php if ($sf_user->isAuthenticated()): ?>
    <div class="container">
        <div class="main">
            <div class="col-main">

                <div class="box">
                    <h3 class="title-main"><span class="label"><?php echo __('CHI TIẾT TÁC PHẨM'); ?></span></h3>
                    <?php
                    $newLink = "#";
                    if ($tacpham[0]['filedownload']) {
                        $newLink = '/uploads/' . sfConfig::get('app_document') . '/' . $tacpham[0]['filedownload'];
                    }
                    $path = '/uploads/' . sfConfig::get('app_document_images') . $tacpham[0]['anhdaidien'];
                    ?>

                    <div class="news-detail">
                        <a href="#" title="" class="news-img"><img src="<?php echo VtHelper::getThumbUrl($path, 187, 125, ''); ?>" alt=""></a>
                        <h3 class="title-article"><?php echo $tacpham[0]['tentacpham']?></h3>
                        <br />
                        <a><b>Tác giả: </b></a> <?php echo $tacpham[0]['csdlTacgia'][0]['hoten']?> &nbsp;&nbsp;&nbsp;&nbsp; <a><b>Chủ đề: </b> </a><?php echo $tacpham[0]['csdlChude'][0]['tenchude']?>
                        <span class="txt-artice-intro">
                            <?php echo $tacpham[0]['gioithieu']?>
                        </span>
                        <div class="detail-tacpham">
                            <iframe src="http://docs.google.com/gview?url==<?php echo sfConfig::get('app_domain') .$newLink; ?>&embedded=true" width="650" height="600" style="border: none;"></iframe>
                        </div>
                    </div>


                    <div class="download">
                        <a href="<?php echo $newLink; ?>" >
                            <img src="/images/download.png" style="border: none;">
                            <span>Tải xuống</span>
                        </a>
                    </div>
                </div>


            </div>
            <div class="col-right">
                <?php include_component('common','newUser'); ?>
                <?php include_component('common','vanBan'); ?>
                <?php include_component('common','taiLieu'); ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php include_component('tmcTwitterBootstrap', 'footer') ?>
