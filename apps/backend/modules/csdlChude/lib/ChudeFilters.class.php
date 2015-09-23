<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/22/15
 * Time: 11:01 PM
 */
class ChudeFilters extends Basecsdl_chudeFormFilter
{
    public function configure()
    {
        $this->setWidgets(array(
            'tenchude'   => new sfWidgetFormFilterInput(array('with_empty'=>false)),

        ));

        $this->setValidators(array(
            'tenchude'   => new sfValidatorPass(array('required' => false)),

        ));

        $this->widgetSchema->setNameFormat('csdl_chude_filters[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    }
}