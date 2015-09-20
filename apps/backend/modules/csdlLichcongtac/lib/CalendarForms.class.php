<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/20/15
 * Time: 9:02 AM
 */

class CalendarForm extends Basecsdl_lichcongtacForm
{
    public function configure()
    {
        unset($this['created_by'],$this['updated_by'],$this['created_at'],$this['updated_at']);
        $this->setWidgets(array(
            'id'         => new sfWidgetFormInputHidden(),
            'hoivien_id' => new sfWidgetFormInputText(),
            'tieude'     => new sfWidgetFormInputText(),
            'noidung'    => new sfWidgetFormTextarea(),
            'start_time' => new sfWidgetFormDateTime(),
            'end_time'   => new sfWidgetFormDateTime(),
            'diadiem'    => new sfWidgetFormInputText(),

        ));

        $this->setValidators(array(
            'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'hoivien_id' => new sfValidatorInteger(array('required' => false)),
            'tieude'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
            'noidung'    => new sfValidatorString(array('max_length' => 500, 'required' => false)),
            'start_time' => new sfValidatorDateTime(array('required' => false)),
            'end_time'   => new sfValidatorDateTime(array('required' => false)),
            'diadiem'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),

        ));

        $this->widgetSchema->setNameFormat('csdl_lichcongtac[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }
    protected function doBind(array $values) {
        $user = sfContext::getInstance()->getUser();
        $values['hoivien_id'] =$user->getGuardUser()->getId();
        parent::doBind($values);
    }

}