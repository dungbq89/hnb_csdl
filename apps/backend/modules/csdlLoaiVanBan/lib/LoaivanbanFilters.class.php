<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/22/15
 * Time: 11:50 PM
 */
class LoaivanbanFormFilter extends Basecsdl_loaivanbanFormFilter
{
    public function configure()
    {
        $this->setWidgets(array(

            'tendanhmuc' => new sfWidgetFormFilterInput(array('with_empty'=>false)),

        ));

        $this->setValidators(array(

            'tendanhmuc' => new sfValidatorPass(array('required' => false)),

        ));

        $this->widgetSchema->setNameFormat('csdl_loaivanban_filters[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }
}