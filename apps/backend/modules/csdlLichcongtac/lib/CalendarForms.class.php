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
        $years = range(date('Y'), date('Y') + 3);
        unset($this['created_by'],$this['updated_by'],$this['created_at'],$this['updated_at']);
        $this->setWidgets(array(
            'id'         => new sfWidgetFormInputHidden(),
            'hoivien_id' => new sfWidgetFormInputText(),
            'tieude'     => new sfWidgetFormInputText(),
            'noidung'    => new sfWidgetFormTextarea(),
            'start_time' => new sfWidgetFormDateTime(array(
                    'date' => array(
                        'format' => '%day%/%month%/%year%',
                        'can_be_empty' => false,
                        'years' => array_combine($years, $years)
                    ),
                    'format' => '%date% &mdash; %time%',
                    'default' => date('Y/m/d H:i', time())
                )),
            'end_time'   => new sfWidgetFormDateTime(array(
                    'date' => array(
                        'format' => '%day%/%month%/%year%',
                        'can_be_empty' => false,
                        'years' => array_combine($years, $years)
                    ),
                    'format' => '%date% &mdash; %time%',
                    'default' => date('Y/m/d H:i', time())
                )),
            'diadiem'    => new sfWidgetFormInputText(),
            'thanhphan'  => new sfWidgetFormTextarea(),
            'chuanbi'    => new sfWidgetFormTextarea(),
            'chutri'     => new sfWidgetFormTextarea(),
        ));

        $this->setValidators(array(
            'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'hoivien_id' => new sfValidatorInteger(array('required' => true)),
            'tieude'     => new sfValidatorString(array('max_length' => 255, 'required' => true)),
            'noidung'    => new sfValidatorString(array('max_length' => 500, 'required' => true)),
            'start_time' => new sfValidatorDateTime(array('required' => true)),
            'end_time'   => new sfValidatorDateTime(array('required' => true)),
            'diadiem'    => new sfValidatorString(array('max_length' => 255, 'required' => true)),
            'thanhphan'  => new sfValidatorString(array('max_length' => 500, 'required' => false)),
            'chuanbi'    => new sfValidatorString(array('max_length' => 500, 'required' => false)),
            'chutri'     => new sfValidatorString(array('max_length' => 500, 'required' => true)),
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