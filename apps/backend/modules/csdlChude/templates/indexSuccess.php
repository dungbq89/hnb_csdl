<?php use_helper('I18N', 'Date') ?>
<?php include_partial('csdlChude/assets') ?>
<?php include_partial('csdlChude/header') ?>



    <div class="container-fluid">
        <div class="row-fluid" style="margin: auto;">
            <?php if ($sidebar_status): ?>
                <?php include_partial('csdlChude/list_sidebar', array('configuration' => $configuration)) ?>
            <?php endif; ?>

            <div class="span<?php echo $sidebar_status ? '10' : '12'; ?>">

                <div class="span12">
                    <h2 style="display: inline"><?php echo __('Danh sách chủ đề', array(), 'messages') ?></h2>
                </div>
                <div class="filter-hoivien">
                    <?php include_partial('csdlChude/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
                </div>

                <?php include_partial('csdlChude/flashes') ?>

<!--                <div id="sf_admin_header">-->
<!--                    --><?php //include_partial('csdlChude/list_header', array('pager' => $pager)) ?>
<!--                </div>-->

                <div id="sf_admin_content" class="list-filter">
                    <form class="form-inline" id="list-form"
                          action="<?php echo url_for('csdl_chude_collection', array('action' => 'batch')) ?>"
                          method="post">

                        <?php include_partial('csdlChude/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>

                        <div>
                            <div class="well pull-left margin-right">
                                <?php include_partial('csdlChude/list_actions', array('helper' => $helper)) ?>
                            </div>
                            <?php include_partial('csdlChude/list_batch_actions', array('helper' => $helper)) ?>
                        </div>
                    </form>

                    <form class="form-inline" method="get" action="<?php echo url_for('csdl_chude') ?>">
                        <div class="well pull-right">
                            <?php echo __('Số bản ghi/trang: ') ?>
                            <?php $select = new sfWidgetFormChoice(array(
                                'multiple' => false,
                                'expanded' => false,
                                'choices' => array('10' => __('10', null, 'tmcTwitterBootstrapPlugin'), 20 => 20, 30 => 30, 50 => 50, 100 => 100)
                            ),
                                array('class' => 'input-medium'));
                            echo $select->render('max_per_page', $sf_user->getAttribute('csdlChude.max_per_page', null, 'admin_module')) ?>
                            <input type="submit" class="btn btn-inverse btn-small"
                                   value="<?php echo __('Go', array(), 'tmcTwitterBootstrapPlugin') ?>"/>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                </div>

                <?php include_partial('csdlChude/list_footer', array('pager' => $pager)) ?>
            </div>
        </div>
    </div>

<?php include_partial('csdlChude/footer') ?>