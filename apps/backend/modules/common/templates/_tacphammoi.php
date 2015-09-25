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
        $path = '/uploads/' . sfConfig::get('app_document_images') . $item->getAnhdaidien();
        ?>
    <div class="item news-item">
        <a href="#" title="" class="news-img"><img src="<?php echo VtHelper::getThumbUrl($path, 187, 125, ''); ?>" alt=""></a>
        <div class="news-info">
            <a href="" title="" class="news-title"><?php echo $item->getTentacpham()?></a> <span>(Ngày xuất bản: <?php echo  VtHelper::truncate($item->getNgayxuatban(), 10, '', true)?> )</span>
            <br />
            <a><b>Tác giả: </b></a>   <a><b>Chủ đề: </b> </a>
            <p class="news-txt">
                <?php echo  VtHelper::truncate($item->getGioithieu(), 300, '', true)?>
            </p>
            <a href="" class="readmore" title="Xem tiếp">Xem chi tiết</a>
        </div>
    </div>
    <div class="clear"></div>
    <?php }  ?>
</div>