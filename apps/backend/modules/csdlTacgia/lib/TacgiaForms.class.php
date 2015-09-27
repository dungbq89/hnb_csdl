<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/22/15
 * Time: 9:40 PM
 */
class TacgiaForms extends Basecsdl_tacgiaForm
{
    public function configure()
    {
        $years = range(date('Y'), date('Y') - 75);
        unset($this['created_by'],$this['updated_by'],$this['created_at'],$this['updated_at'],$this['hoivien_id']);
        $this->setWidgets(array(
            'id'         => new sfWidgetFormInputHidden(),
            'hoten'      => new sfWidgetFormInputText(),
            'ngaysinh'   => new sfWidgetFormDateTime(array(
                    'date' => array(
                        'format' => '%day%/%month%/%year%',
                        'can_be_empty' => false,
                        'years' => array_combine($years, $years)
                    ),
                    'format' => '%date%',
                    'default' => date('Y/m/d H:i', time())
                )),
            'gioitinh'   => new sfWidgetFormChoice(array(
                    'choices' => $this->gioitinh(),
                    'multiple' => false,
                    'expanded' => false)),
            'diachi'     => new sfWidgetFormInputText(),
            'dienthoai'  => new sfWidgetFormInputText(),
            'email'      => new sfWidgetFormInputText(),
            'donvi'      => new sfWidgetFormInputText(),

        ));

        $this->setValidators(array(
            'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'hoten'      => new sfValidatorString(array('max_length' => 255, 'required' => true)),
            'ngaysinh'   => new sfValidatorDateTime(array('required' => true)),
            'gioitinh'   => new sfValidatorChoice(array(
                    'required' => true,
                    'choices' => array_keys($this->gioitinh()),)),
            'diachi'     => new sfValidatorString(array('max_length' => 255, 'required' => true)),
            'dienthoai'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
            'email'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
            'donvi'      => new sfValidatorString(array('max_length' => 255, 'required' => true)),

        ));

        $this->widgetSchema->setNameFormat('csdl_tacgia[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }

    protected function gioitinh(){
        $arrJobs = array(''=>'----- Chọn giới tính -----');
        $arrJobs['Nam'] = 'Nam';
        $arrJobs['Nữ'] = 'Nữ';
        return $arrJobs;
    }
}
