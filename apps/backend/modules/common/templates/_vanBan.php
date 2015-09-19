<div class="box-mod category">
    <h3 class="title"><span>Văn bản - quy phạm</span></h3>
    <?php if(count($listVanBan)){
        foreach($listVanBan as $banBan){
            ?>
            <div class="item news-item">
                <a href="#" title=""><img src="/images/document.png" alt="" width="30px"></a>
                <a href="#" title="" class="news-title" style="margin-left: 10px;"><?php echo htmlspecialchars($banBan['tentailieu']); ?></a>
                <div class="clear"></div>
            </div>
        <?php
        }
    } ?>
</div>