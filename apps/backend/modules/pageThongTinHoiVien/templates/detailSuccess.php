<?php
include_partial('tmcTwitterBootstrap/assets');
include_component('tmcTwitterBootstrap', 'header');
?>
<?php if ($sf_user->isAuthenticated()): ?>
    <div class="container">
        <div class="main">
            <div class="container-hoivien">
                <div class="box">
                    <h3 class="title-main"><span class="label"><?php echo __('Thông tin hội viên'); ?></span></h3>
                </div>
                <?php if (isset($userDetail) && count($userDetail)) {
                    $path = '/uploads/' . sfConfig::get('app_member_images') . $userDetail->images;
                    $personal = $userDetail;
                ?>
                    <img style="margin: 10px;" src="<?php echo VtHelper::getThumbUrl($path, 90, 120, 'user_90_120') ?>" alt="">
                    <table class="table bordered" style="float: right; width: 800px;">
                        <tr>

                            <td style="width: 150px;">Họ và tên</td>
                            <td><?php echo $personal->hodem; ?></td>
                        </tr>
                        <tr >
                            <td >Giới tính</td>
                            <td>
                                <?php if($personal->gioitinh==1) echo "Nam"; else echo "Nữ"; ?>
                            </td>
                        </tr>

                        <tr>
                            <td>Ngày sinh</td>
                            <td><?php echo date('d/m/Y',strtotime($personal->ngaysinh)); ?></td>
                        </tr>

                        <tr>
                            <td>Số điện thoại</td>
                            <td colspan="2"><?php echo $personal->dienthoai; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td colspan="2"><?php echo $personal->email; ?></td>
                        </tr>
                        <tr>
                            <td>Thẻ HNB Hà Tĩnh</td>
                            <td colspan="2"><?php echo $personal->thehnbht; ?></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td colspan="2"><?php echo $personal->diachi; ?></td>
                        </tr>
                        <tr>
                            <td>Chức vụ</td>
                            <td colspan="2"><?php echo $personal->chucvu; ?></td>
                        </tr>
                        <tr>
                            <td>Cơ quan công tác</td>
                            <td colspan="2"><?php echo $personal->cqcongtac; ?></td>
                        </tr>
                        <tr>
                            <td>Bút danh</td>
                            <td colspan="2"><?php echo $personal->butdanh; ?></td>
                        </tr>
                        <tr>
                            <td>Học vấn</td>
                            <td colspan="2"><?php echo $personal->hocvan; ?></td>
                        </tr>
                        <tr>
                            <td>Ngoại ngữ</td>
                            <td colspan="2"><?php echo $personal->ngoaingu; ?></td>
                        </tr>
                        <tr>
                            <td>Chính trị</td>
                            <td colspan="2"><?php echo $personal->chinhtri; ?></td>
                        </tr>
                        <tr>
                            <td>Đảng viên</td>
                            <td colspan="2"><?php echo $personal->dangvien; ?></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>

            <div class="tab-hoivien" style="clear: both;">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist" style="background: none;">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                              data-toggle="tab">Quá trình công tác</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Thông
                            tin thẻ hội viên</a></li>
                    <li role="presentation"><a href="#tacpham" aria-controls="tacpham" role="tab" data-toggle="tab">Tác
                            phẩm</a></li>
                    <li role="presentation"><a href="#giaithuong" aria-controls="giaithuong" role="tab"
                                               data-toggle="tab">Giải thưởng</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <?php if (isset($quatrinhs) && count($quatrinhs)) {
                            foreach ($quatrinhs as $quatrinh) {
                                ?>
                                <table class="table bordered vanban tb-hoivien">
                                    <tr>
                                        <td class="td-document-detail">Thời gian bắt đầu</td>
                                        <td><?php echo date('d/m/Y', strtotime($quatrinh->batdau)); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-document-detail">Thời gian kết thúc</td>
                                        <td><?php echo date('d/m/Y', strtotime($quatrinh->ketthuc)); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-document-detail">Chức vụ</td>
                                        <td><?php echo htmlspecialchars($quatrinh->chucvu); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-document-detail">Mô tả</td>
                                        <td><?php echo htmlspecialchars($quatrinh->mota); ?></td>
                                    </tr>
                                </table>
                            <?php
                            }
                        } else {
                            echo "Đang cập nhật";
                        } ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <?php if (isset($thehoiviens) && count($thehoiviens)) {
                            foreach ($thehoiviens as $thehoivien) {
                                ?>
                                <table class="table bordered vanban tb-hoivien">
                                    <tr>
                                        <td class="td-document-detail">Mã thẻ</td>
                                        <td><?php echo htmlspecialchars($thehoivien->mathe); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-document-detail">Ngày cấp</td>
                                        <td><?php echo date('d/m/Y', strtotime($thehoivien->ngaycap)); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-document-detail">Ngày hết hạn</td>
                                        <td><?php echo date('d/m/Y', strtotime($thehoivien->ngayhethan)); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-document-detail">Người ký</td>
                                        <td><?php echo htmlspecialchars($thehoivien->nguoiky); ?></td>
                                    </tr>
                                </table>
                            <?php
                            }
                        } else {
                            echo "Đang cập nhật";
                        } ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tacpham">
                        <div class="box-news">
                            <h3 class="h3-tacpham">Danh sách tác phẩm</h3>
                            <?php
                            if (isset($listTacpham) && count($listTacpham)) {
                                foreach ($listTacpham as $item) {
                                    $path = '/uploads/' . sfConfig::get('app_document_images') . $item['anhdaidien'];
                                    ?>
                                    <div class="item news-item">
                                        <a href="<?php echo url_for2('page_chitiet_tacpham', array('id' => $item['id'])) ?>"
                                           title="" class="news-img"><img
                                                src="<?php echo VtHelper::getThumbUrl($path, 187, 125, ''); ?>" alt=""></a>

                                        <div class="news-info">
                                            <a href="<?php echo url_for2('page_chitiet_tacpham', array('id' => $item['id'])) ?>"
                                               title="" class="news-title"><?php echo $item['tentacpham']?></a> <span>(Ngày xuất bản: <?php echo VtHelper::truncate($item['ngayxuatban'], 10, '', true)?>
                                                )</span>
                                            <br/>
                                            <a><b>Tác giả: </b></a> <?php echo $item['csdlTacgia'][0]['hoten']?> &nbsp;&nbsp;&nbsp;&nbsp;
                                            <a><b>Chủ đề: </b> </a><?php echo $item['csdlChude'][0]['tenchude']?>
                                            <p class="news-txt">
                                                <?php echo VtHelper::truncate($item['gioithieu'], 300, '', true)?>
                                            </p>
                                            <a href="<?php echo url_for2('page_chitiet_tacpham', array('id' => $item['id'])) ?>"
                                               class="readmore" title="Xem tiếp">Xem chi tiết</a>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="giaithuong">
                        <?php if(isset($giaithuong) && count($giaithuong)){
                            foreach($giaithuong as $item) {
                                ?>
                                <table class="table bordered vanban tb-hoivien">
                                    <tr>
                                        <td class="td-document-detail">Tên giải thưởng</td>
                                        <td><?php echo htmlspecialchars($item->tengiaithuong); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-document-detail">Lĩnh vực</td>
                                        <td><?php echo htmlspecialchars($item->madanhmuc); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-document-detail">Năm tổ chức</td>
                                        <td><?php echo htmlspecialchars($item->namtochuc); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-document-detail">Giá trị</td>
                                        <td><?php echo htmlspecialchars($item->giatri); ?></td>
                                    </tr>

                                </table>
                            <?php
                            }
                        } else {
                            echo "Đang cập nhật";
                        } ?>
                    </div>
                </div>

            </div>

        </div>
    </div>
<?php endif; ?>
<?php include_component('tmcTwitterBootstrap', 'footer') ?>

<script type="text/javascript">
    $(document).ready(function () {
        $('#myTabs a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    });
</script>