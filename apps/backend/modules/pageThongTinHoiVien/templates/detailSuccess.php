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

        </div>
    </div>
<?php endif; ?>
<?php include_component('tmcTwitterBootstrap', 'footer') ?>
