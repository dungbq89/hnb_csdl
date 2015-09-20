<div class="box-mod">
    <h3 class="title"><span>Hội viên mới</span></h3>
    <?php if(count($listUser)){
        foreach($listUser as $user){
            ?>
            <div class="item news-item">
                <a href="#" title=""><img src="/images/user.png" alt="" width="30px"></a>
                <a href="#" title="" class="news-title" style="margin-left: 10px;"><?php echo htmlspecialchars($user['hodem'])." ".htmlspecialchars($user['ten']) ?></a>
                <div class="clear"></div>
            </div>
            <?php
        }
    } ?>

</div>