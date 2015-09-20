<div class="box-mod category">
    <h3 class="title"><span>Tài liệu nghiệp vụ</span></h3>
    <?php if(count($listTaiLieu)){
        foreach($listTaiLieu as $taiLieu){
            ?>
            <div class="item news-item">
                <a href="<?php echo url_for2('page_tailieu_detail',array('id'=>$taiLieu['id'])) ?>" title=""><img src="/images/file.png" alt="" width="30px"></a>
                <a href="<?php echo url_for2('page_tailieu_detail',array('id'=>$taiLieu['id'])) ?>" title="" class="news-title" style="margin-left: 10px;"><?php echo htmlspecialchars($taiLieu['tentailieu']); ?></a>
                <div class="clear"></div>
            </div>
        <?php
        }
    } ?>
</div>