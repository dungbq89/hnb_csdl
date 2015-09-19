<?php include_partial('alerts') ?>
<?php include_partial('signin_form', array('form' => $form, 'routes' => $sf_context->getRouting()->getRoutes(),'change_password' => $change_password)) ?>