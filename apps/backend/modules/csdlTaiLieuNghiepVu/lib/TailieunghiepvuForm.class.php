<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/24/15
 * Time: 12:14 AM
 */
class TailieunghiepvuForm extends Basecsdl_tailieunghiepvuForm
{
    public function configure()
    {
        unset($this['created_by'],$this['updated_by'],$this['created_at'],$this['updated_at'],$this['hoivien_id']);
        $this->setWidgets(array(
            'id'           => new sfWidgetFormInputHidden(),
            'matailieu'    => new sfWidgetFormInputText(),
            'kyhieu'       => new sfWidgetFormInputText(),
            'sotailieu'    => new sfWidgetFormInputText(),
            'tentailieu'   => new sfWidgetFormInputText(),
            'trichdan'     => new sfWidgetFormTextarea(),
            'anhdaidien'   => new sfWidgetFormInputText(),
            'filedownload' => new sfWidgetFormInputText(),
            'trangthai'    => new sfWidgetFormInputCheckbox(),

        ));

        $this->setValidators(array(
            'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'matailieu'    => new sfValidatorString(array('max_length' => 25, 'required' => true)),
            'kyhieu'       => new sfValidatorString(array('max_length' => 25, 'required' => true)),
            'sotailieu'    => new sfValidatorString(array('max_length' => 25, 'required' => true)),
            'tentailieu'   => new sfValidatorString(array('max_length' => 255, 'required' => true)),
            'trichdan'     => new sfValidatorString(array('max_length' => 1000, 'required' => true)),
            'anhdaidien'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
            'filedownload' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
            'trangthai'    => new sfValidatorBoolean(array('required' => false)),

        ));

        $this->widgetSchema->setNameFormat('csdl_tailieunghiepvu[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    }
}
