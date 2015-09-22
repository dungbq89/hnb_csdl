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
                <?php if(isset($userDetail) && count($userDetail)){ ?>
                <table class="table bordered vanban tb-hoivien">
                    <tr>
                        <td class="td-document-detail">Họ và tên</td>
                        <td><?php echo htmlspecialchars($userDetail->hodem)." ".htmlspecialchars($userDetail->ten); ?></td>
                    </tr>
                    <tr>
                        <td class="td-document-detail">Giới tính</td>
                        <td>
                            <?php if($userDetail->gioitinh==1) echo "Nam"; else echo "Nữ"; ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="td-document-detail">Ngày sinh</td>
                        <td><?php echo date('d/m/Y',strtotime($userDetail->ngaysinh)); ?></td>
                    </tr>

                    <tr>
                        <td class="td-document-detail">Địa chỉ</td>
                        <td><?php echo htmlspecialchars($userDetail->diachi); ?></td>
                    </tr>

                    <tr>
                        <td class="td-document-detail">Quận/huyện</td>
                        <td><?php echo htmlspecialchars($userDetail->maquan); ?></td>
                    </tr>

                    <tr>
                        <td class="td-document-detail">Tỉnh/thành phố</td>
                        <td><?php echo htmlspecialchars($userDetail->matinh); ?></td>
                    </tr>

                </table>
                <?php } ?>
            </div>

            <div class="tab-hoivien" style="clear: both;">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist" style="background: none;">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Quá trình công tác</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Thông tin thẻ hội viên</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <?php if(isset($quatrinh) && count($quatrinh)){
                            ?>
                            <table class="table bordered vanban tb-hoivien">
                                <tr>
                                    <td class="td-document-detail">Thời gian bắt đầu</td>
                                    <td><?php echo date('d/m/Y',strtotime($quatrinh->batdau)); ?></td>
                                </tr>
                                <tr>
                                    <td class="td-document-detail">Thời gian kết thúc</td>
                                    <td><?php echo date('d/m/Y',strtotime($quatrinh->ketthuc)); ?></td>
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
                        }else{
                            echo "Đang cập nhật";
                        } ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <?php if(isset($thehoivien) && count($thehoivien)){
                            ?>
                            <table class="table bordered vanban tb-hoivien">
                                <tr>
                                    <td class="td-document-detail">Mã thẻ</td>
                                    <td><?php echo htmlspecialchars($thehoivien->mathe); ?></td>
                                </tr>
                                <tr>
                                    <td class="td-document-detail">Ngày cấp</td>
                                    <td><?php echo date('d/m/Y',strtotime($thehoivien->ngaycap)); ?></td>
                                </tr>
                                <tr>
                                    <td class="td-document-detail">Ngày hết hạn</td>
                                    <td><?php echo date('d/m/Y',strtotime($thehoivien->ngayhethan)); ?></td>
                                </tr>
                                <tr>
                                    <td class="td-document-detail">Người ký</td>
                                    <td><?php echo htmlspecialchars($thehoivien->nguoiky); ?></td>
                                </tr>
                            </table>
                        <?php
                        }else{
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
    $(document).ready(function(){
        $('#myTabs a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    });
</script>