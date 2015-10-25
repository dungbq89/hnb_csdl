<?php

/**
 * Created by JetBrains PhpStorm.
 * User: ngoctv1
 * Date: 4/24/14
 * Time: 12:02 PM
 * To change this template use File | Settings | File Templates.
 */
class csdlDantocAdminFilter extends Basecsdl_dantocFormFilter {

    public function configure() {
        $this->setWidgets(array(
            'tendantoc'           => new sfWidgetFormFilterInput(array('with_empty' => false))
        ));

        $this->setValidators(array(
            'tendantoc'           => new sfValidatorPass(array('required' => false))

        ));

        $this->widgetSchema->setNameFormat('csdl_dantoc[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }

}
