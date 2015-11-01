<style>
    .lbl-title{
        width: 130px;
        padding-top: 8px;
        font-weight: bold;
    }
</style>

<?php
include_partial('tmcTwitterBootstrap/assets');
include_component('tmcTwitterBootstrap', 'header');
?>
<?php if ($sf_user->isAuthenticated()): ?>

<?php endif; ?>
    <div class="container">
        <div class="main">
            <div class="col-main">
                <div class="box">
                    <h3 class="title-main"><span class="label">Tra cứu hội viên &raquo</span></h3>
                    <div class="box-form">
                        <form class="frm-log" action="" method="POST">
                            <?php echo $form->renderHiddenFields() ?>

                            <div class="frm-item">
                                <span class="lbl-title">Tên hội viên</span>
                        <span class="btn-in">
                             <?php echo $form['full_name']->render(array('class'=>'in-txt'));
                             if ($form['full_name']->hasError()) {
                                 echo '<span class="help-inline">' . $form['full_name']->renderError() . '</span>';
                             }?>
                        </span>
                            </div>
                            <div class="frm-item">
                                <span class="lbl-title">Điện thoại</span>
                        <span class="btn-in">
                             <?php echo $form['phone_number']->render(array('class'=>'in-txt'));
                             if ($form['phone_number']->hasError()) {
                                 echo '<span class="help-inline">' . $form['phone_number']->renderError() . '</span>';
                             }?>
                        </span>
                            </div>

                            <div class="frm-item">
                                <span class="lbl-title">Email</span>
                        <span class="btn-in">
                             <?php echo $form['email']->render(array('class'=>'in-txt'));
                             if ($form['email']->hasError()) {
                                 echo '<span class="help-inline">' . $form['email']->renderError() . '</span>';
                             }?>
                        </span>
                            </div>
                            <div class="box-btn">

                                <button name="" type="submit" class="btn">Tra cứu</button>
                                <button name="" type="reset" class="btn">Hủy bỏ</button>
                            </div>

                        </form>
                    </div>


                    <?php
                    if (isset($listPersonal) && count($listPersonal)):
                        foreach ($listPersonal as $personal):
                            $path = '/uploads/member'. $personal->images;
                            ?>
                            <div class="list-news">
                                <a href="<?php echo url_for2('page_thongtinhoivien',array('id'=>$personal->hoivien_id)) ?>" title="" class="news-img" style="width: 90px;"><img style="width: 90px; height: 120px;" src="<?php echo VtHelper::getThumbUrl($path, 90, 120, 'user_90_120') ?>" alt=""></a>

                                <div class="info-hoivien">
                                    <a href="<?php echo url_for2('page_thongtinhoivien',array('id'=>$personal->hoivien_id)) ?>" title="" class="news-title"  style="margin-bottom: 5px; color: #3398cc;">
                                        <?php echo $personal->hodem; ?>
                                    </a>

                                    <p class="news-txt-hoivien">
                                        <span><b>Số thẻ hội viên: </b><?php echo $personal->thehnbht; ?></span>&nbsp;&nbsp;&nbsp;
                                        <?php
                                        $donvi = csdl_coquanbaochiTable::tenDonvi($personal->donvi_id);
                                        echo $donvi;
                                        ?>
                                        &nbsp;&nbsp;&nbsp;
                                        <span><b>Chức vụ: </b><?php echo $personal->chucvu; ?></span>
                                    </p>
                                    <p class="news-txt-hoivien">
                                        <span><b>Địa chỉ: </b><?php echo $personal->diachi; ?></span>&nbsp;&nbsp;&nbsp;
                                <span><b>Giới tính: </b><?php if($personal->gioitinh=='1') echo 'Nam'; else echo 'Nữ';?>
                                    </p>
                                    <p class="news-txt-hoivien">
                                        <span><b>Ngày sinh: </b><?php if($personal->ngaysinh) echo date_format(date_create($personal->ngaysinh), 'd/m/Y'); ?></span>&nbsp;&nbsp;&nbsp;
                                    </p>
                                    <p class="news-txt-hoivien">
                                        <span><b>Số điện thoại: </b><?php echo $personal->phone; ?></span>&nbsp;&nbsp;&nbsp;
                                        <span><b>Bút danh: </b><?php echo $personal->butdanh; ?></span>&nbsp;&nbsp;&nbsp;
                                <span><b>Email: </b><?php echo $personal->email; ?>
                                    </p>

                                </div>
                                <div class="clear"></div>
                            </div>
                        <?php
                        endforeach;
                    endif;
                    ?>

                    <?php
                    if ($pager->haveToPaginate()){
                        include_component("common", "pagging", array('redirectUrl'=>$url_paging,'pager'=>$pager,'vtParams'=>array('slug'=>sfContext::getInstance()->getRequest()->getParameter('slug'))));
                    }
                    ?>

                </div>
            </div>
            <div class="col-right">
                <?php include_component('common','newUser'); ?>
                <?php include_component('common','vanBan'); ?>
                <?php include_component('common','taiLieu'); ?>
            </div>
        </div>
    </div>
<?php include_component('tmcTwitterBootstrap', 'footer') ?>
