<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/26/15
 * Time: 3:29 PM
 */
?>
<div class="box-news">
    <h3 class="title-main"><span class="label">CHI TIẾT TÁC PHẨM</span></h3>
    <?php foreach($listTacpham as $item){
        $path = '/uploads/' . sfConfig::get('app_document_images') . $item['anhdaidien'];
        ?>
        <div class="item news-item">
            <a href="#" title="" class="news-img"><img src="<?php echo VtHelper::getThumbUrl($path, 187, 125, ''); ?>" alt=""></a>
            <div class="news-info">
                <a href="" title="" class="news-title"><?php echo $item['tentacpham']?></a> <span>(Ngày xuất bản: <?php echo  VtHelper::truncate($item['ngayxuatban'], 10, '', true)?> )</span>
                <br />
                <a><b>Tác giả: </b></a> <?php echo $item['csdlTacgia'][0]['hoten']?> &nbsp;&nbsp;&nbsp;&nbsp; <a><b>Chủ đề: </b> </a><?php echo $item['csdlChude'][0]['tenchude']?>
                <p class="news-txt">
                    <?php echo  VtHelper::truncate($item['gioithieu'], 300, '', true)?>
                </p>
                <a href="" class="readmore" title="Xem tiếp">Xem chi tiết</a>
            </div>
        </div>
        <div class="clear"></div>
    <?php }  ?>
</div>