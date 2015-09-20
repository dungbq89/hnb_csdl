<?php
include_partial('tmcTwitterBootstrap/assets');
include_component('tmcTwitterBootstrap', 'header');
?>
<?php if ($sf_user->isAuthenticated()): ?>
    <div class="container">
        <div class="main">
            <div class="col-main">

                <div class="box">
                    <h3 class="title-main"><span class="label"><?php echo __('Chi tiết văn bản pháp quy'); ?></span></h3>
                    <table class="table bordered vanban">
                        <?php
                        $newLink = "#";
                        if ($document->filedownload) {
                            $newLink = '/uploads/' . sfConfig::get('app_document') . '/' . $document->filedownload;
                        }
                        ?>
                        <tr>
                            <td class="td-document-detail">Tên văn bản</td>
                            <td><a style="color: #3398cc; font-weight: bold;" href="<?php echo $newLink; ?>" target="_blank"><?php echo htmlspecialchars($document->tentailieu); ?></a></td>
                        </tr>
                        <tr>
                            <td class="td-document-detail">Số văn bản</td>
                            <td><?php echo htmlspecialchars($document->sotailieu); ?></td>
                        </tr>
                        <tr>
                            <td class="td-document-detail">Ngày ban hành</td>
                            <td><?php echo date('d/m/Y',strtotime($document->ngaybanhanh)); ?></td>
                        </tr>
                        <tr>
                            <td class="td-document-detail">Trích yếu</td>
                            <td><?php echo htmlspecialchars($document->trichdan); ?></td>
                        </tr>
                    </table>
                    <div class="download">
                        <a href="<?php echo $newLink; ?>" >
                            <img src="/images/download.png" style="border: none;">
                            <span>Tải xuống</span>
                        </a>
                    </div>
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
