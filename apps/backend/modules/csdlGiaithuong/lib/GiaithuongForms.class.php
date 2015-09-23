<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/24/15
 * Time: 12:24 AM
 */

class GiaithuongForm extends Basecsdl_giaithuongForm
{
    public function configure()
    {
        unset($this['created_by'],$this['updated_by'],$this['created_at'],$this['updated_at'],$this['hoivien_id']);
        $this->setWidgets(array(
            'id'            => new sfWidgetFormInputHidden(),
            'tengiaithuong' => new sfWidgetFormInputText(),
            'madanhmuc'     => new sfWidgetFormInputText(),
            'namtochuc'     => new sfWidgetFormInputText(),
            'giatri'        => new sfWidgetFormInputText(),

        ));

        $this->setValidators(array(
            'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'tengiaithuong' => new sfValidatorString(array('max_length' => 255, 'required' => true)),
            'madanhmuc'     => new sfValidatorString(array('max_length' => 25, 'required' => true)),
            'namtochuc'     => new sfValidatorInteger(array('required' => true)),
            'giatri'        => new sfValidatorInteger(array('required' => true)),

        ));

        $this->widgetSchema->setNameFormat('csdl_giaithuong[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }
}