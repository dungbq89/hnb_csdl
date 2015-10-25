<?php
include_partial('tmcTwitterBootstrap/assets');
include_component('tmcTwitterBootstrap', 'header');
?>
<?php if ($sf_user->isAuthenticated()): ?>

<?php endif; ?>
    <div class="container">
        <div class="main">
            <div class="col-main">
                <?php include_component('common','lichcongtac'); ?>
                <?php include_component('common','tacphammoi'); ?>
            </div>
            <div class="col-right">
                <?php include_component('common','newUser'); ?>
                <?php include_component('common','vanBan'); ?>
                <?php include_component('common','taiLieu'); ?>
            </div>
        </div>
    </div>
<?php include_component('tmcTwitterBootstrap', 'footer') ?>