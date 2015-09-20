<div class="box-mod category">
    <h3 class="title"><span>Văn bản - quy phạm</span></h3>
    <?php if(count($listVanBan)){
        foreach($listVanBan as $vanBan){
            ?>
            <div class="item news-item">
                <a href="<?php echo url_for2('page_document_detail',array('id'=>$vanBan['id'])) ?>" title=""><img src="/images/document.png" alt="" width="30px"></a>
                <a href="<?php echo url_for2('page_document_detail',array('id'=>$vanBan['id'])) ?>" title="" class="news-title" style="margin-left: 10px;"><?php echo htmlspecialchars($vanBan['tentailieu']); ?></a>
                <div class="clear"></div>
            </div>
        <?php
        }
    } ?>
</div>