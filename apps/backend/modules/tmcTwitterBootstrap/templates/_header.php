
<div class="navbar navbar-fixed-top" style="background-color: #ffffff;">
    <div style="height: 80px; background-color: #ffffff; margin-left: 180px; margin-right: 180px;">
        <a href="<?php echo url_for('@homepage'); ?>" class="logo">
            <img src="../../../img/img-logo.png" class=""/>
        </a>
        <p class="navbar-text pull-right">
            <?php if ($sf_user->isAuthenticated()){ ?>
            <?php echo __('Logged in as', null, 'tmcTwitterBootstrapPlugin') ?>
            <a href="<?php echo url_for('@sf_guard_change_password') ?>"><?php echo $sf_user->getGuardUser() ?></a> |
            <a href="<?php echo url_for('@sf_guard_signout') ?>"><?php echo __('Logout', null, 'tmcTwitterBootstrapPlugin') ?></a>

            <?php }else{ ?>
                <a href="<?php echo url_for('@sf_guard_change_password') ?>">Đăng ký</a> |
                <a href="/admin.php/guard/login">Đăng nhập</a>
            <?php } ?>

        </p>
        <p class="home-hoinhabao" style="margin-bottom: 10px; text-align: right; position: relative;">
            <a style="position: absolute; top: -25px; right: 0px; padding: 3px 5px; background: #0788d9; border-radius: 3px; color: #fff;" href="http://hoinhabaohatinh.vn/" target="_blank">Trang chủ HNB</a>
        </p>
        <div class="clear"></div>
<!--        <div class="navbar-text pull-right">-->
<!--            <input type="text" name="keyword" style="width: 180px;" />-->
<!--        </div>-->
    </div>
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <a class="brand" href="<?php echo url_for("@homepage") ?>"></a>
            <?php //if ($sf_user->isAuthenticated()): ?>
            <div class="nav-collapse">
                <ul class="nav">
                  <?php if(!is_null($menus)):?>
                    <?php foreach ($menus as $k => $menu): ?>
                        <?php $is_current_module = false; ?>
                        <?php $is_current_route = false; ?>
                        <?php if (isset($menu['module_name']) && $menu['module_name'] == $sf_context->getModuleName()): ?>
                            <?php $is_current_module = true; ?>
                        <?php endif; ?>

                        <?php $credentials = isset($menu['credentials']) ? $menu['credentials'] : null; ?>
                        <?php if ($credentials): ?>
                            <?php if (!$sf_user->hasCredential($credentials)): ?>
                                <?php continue; ?>
                            <?php endif; ?>
                        <?php endif; ?>

                        <?php if (!array_key_exists('dropdown', $menu)): ?>

                            <?php $name = $k; ?>
                            <?php $route = $menu['route']; ?>
                            <?php if (!array_key_exists($route, $routes)): ?>
                                <?php continue; ?>
                            <?php endif; ?>
                            <?php $is_current_route = preg_match('/^'.$route.'$/', $current_route) ?>
                            <li class="<?php echo $is_current_route || $is_current_module ? 'active' : '' ?>"><a href="<?php echo url_for('@' . $route); ?>"><?php echo __($name) ?></a></li>
                        <?php else: ?>
                            <?php $submenus = $menu['dropdown']; ?>
                            <li class="dropdown <?php echo $is_current_route || $is_current_module ? 'active' : '' ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __($k) ?> <b class="caret"></b></a>
                                <ul class="dropdown-menu">

                                  <?php if($submenus !=null):?>
                                    <?php foreach ($submenus as $k => $menu): ?>

                                        <?php $name = $k; ?>
                                        <?php $route = $menu['route']; ?>
                                        <?php $divider = isset($menu['divider']) ? $menu['divider'] : null; ?>
                                        <?php $credentials = isset($menu['credentials']) ? $menu['credentials'] : null; ?>
                                        <?php if ($credentials): ?>
                                            <?php if (!$sf_user->hasCredential($credentials)): ?>
                                                <?php continue; ?>
                                            <?php endif; ?>
                                        <?php endif; ?>

                                        <?php if (!array_key_exists($route, $routes)): ?>
                                            <?php continue; ?>
                                        <?php endif; ?>
                                        <?php $is_current_route = preg_match('/^'.$route.'$/', $current_route) ?>
                                        <li class="<?php echo $is_current_route ? 'active' : '' ?>"><a href="<?php echo url_for('@' . $route); ?>"><?php echo __($name) ?></a></li>
                                        <?php if ($divider): ?>
                                            <li class="divider"></li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                  <?php endif; ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </ul>

            </div>
            <?php// endif ?>
        </div>
    </div>
</div>