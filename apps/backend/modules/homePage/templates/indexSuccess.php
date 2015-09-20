<?php
include_partial('tmcTwitterBootstrap/assets');
include_component('tmcTwitterBootstrap', 'header');
?>
<?php if ($sf_user->isAuthenticated()): ?>
    <div class="container">
        <div class="main">
            <div class="col-main">

                <?php include_component('common','lichcongtac'); ?>

                <div class="box-news">
                    <h3 class="title-main"><span class="label">Tin tức - Sự kiện &raquo</span></h3>
                    <div class="item news-item">
                        <a href="#" title="" class="news-img"><img src="img/img-news2.png" alt=""></a>
                        <div class="news-info">
                            <a href="" title="" class="news-title">Bia lại đua nhau ra ngoài thị trường</a>
                            <p class="news-txt">
                                Sau bia không say, thị trường lại vừa đón nhận
                                thêm sản phẩm mới làm từ tổ yến. Tuy nhiên,
                                sức tiêu thụ ...</p>
                            <p class="news-date">08:20 12/05/2015</p>
                            <a href="" class="readmore" title="Xem tiếp">Xem tiếp</a>
                        </div>
                    </div>
                    <div class="item news-more">
                        <ul>
                            <li><a href="" title="">Gần 100 công nhân nhiễm độc khí ga </a></li>
                            <li><a href="" title="">Gần 100 công nhân nhiễm độc khí ga</a></li>
                            <li><a href="" title="">Gần 100 công nhân nhiễm độc khí ga<img class="icon-new" src="img/new.gif"/>  </a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="box-news">
                    <h3 class="title-main"><span class="label">Hoạt động nghiệp vụ &raquo</span></h3>
                    <div class="item news-item">
                        <a href="#" title="" class="news-img"><img src="img/img-news3.png" alt=""></a>
                        <div class="news-info">
                            <a href="" title="" class="news-title">Hà Nội, nắng nóng lên tới đỉnh điểm ở trạm Láng</a>
                            <p class="news-txt">Giá dầu có thể xuống tới mức nào và kéo dài trong bao lâu là câu hỏi được đặt ra sau khi dầu mất ..</p>
                            <p class="news-date">08:20 12/05/2015</p>
                            <a href="" class="readmore" title="Xem tiếp">Xem tiếp</a>
                        </div>
                    </div>
                    <div class="item news-more">
                        <ul>
                            <li><a href="" title="">Gần 100 công nhân nhiễm độc khí ga</a></li>
                            <li><a href="" title="">Gần 100 công nhân nhiễm độc khí ga</a></li>
                            <li><a href="" title="">Gần 100 công nhân nhiễm độc khí ga</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="box-news">
                    <h3 class="title-main"><span class="label">Văn hóa - Nghệ thuật &raquo</span></h3>
                    <div class="item news-item">
                        <a href="#" title="" class="news-img"><img src="img/img-news4.png" alt=""></a>
                        <div class="news-info">
                            <a href="" title="" class="news-title">Hà Nội, nắng nóng lên tới đỉnh điểm ở trạm Láng</a>
                            <p class="news-txt">Giá dầu có thể xuống tới mức nào và kéo dài trong bao lâu là câu hỏi được đặt ra sau khi dầu mất ..</p>
                            <p class="news-date">08:20 12/05/2015</p>
                            <a href="" class="readmore" title="Xem tiếp">Xem tiếp</a>
                        </div>
                    </div>
                    <div class="item news-more">
                        <ul>
                            <li><a href="" title="">Gần 100 công nhân nhiễm độc khí ga<img class="icon-new" src="img/new.gif"/> </a></li>
                            <li><a href="" title="">Gần 100 công nhân nhiễm độc khí ga<img src="" alt=""> </a></li>
                            <li><a href="" title="">Gần 100 công nhân nhiễm độc khí ga<img class="icon-new" src="img/new.gif"/> </a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
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