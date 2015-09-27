<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/20/15
 * Time: 8:21 PM
 */


?>
<div class="box-news">
    <h3 class="title-main"><span class="label">TÁC PHẨM MỚI</span></h3>
    <?php foreach($listTacpham as $item){
        $path = '/uploads/' . sfConfig::get('app_document_images') . $item['anhdaidien'];
        ?>
    <div class="item news-item">
        <a href="<?php echo url_for2('page_chitiet_tacpham',array('id'=>$item['id'])) ?>" title="" class="news-img"><img src="<?php echo VtHelper::getThumbUrl($path, 187, 125, ''); ?>" alt=""></a>
        <div class="news-info">
            <a href="<?php echo url_for2('page_chitiet_tacpham',array('id'=>$item['id'])) ?>" title="" class="news-title"><?php echo $item['tentacpham']?></a> <span>(Ngày xuất bản: <?php echo  VtHelper::truncate($item['ngayxuatban'], 10, '', true)?> )</span>
            <br />
            <a><b>Tác giả: </b></a> <?php echo $item['csdlTacgia'][0]['hoten']?> &nbsp;&nbsp;&nbsp;&nbsp; <a><b>Chủ đề: </b> </a><?php echo $item['csdlChude'][0]['tenchude']?>
            <p class="news-txt">
                <?php echo  VtHelper::truncate($item['gioithieu'], 300, '', true)?>
            </p>
            <a href="<?php echo url_for2('page_chitiet_tacpham',array('id'=>$item['id'])) ?>" class="readmore" title="Xem tiếp">Xem chi tiết</a>
        </div>
    </div>
    <div class="clear"></div>
    <?php }  ?>
</div>