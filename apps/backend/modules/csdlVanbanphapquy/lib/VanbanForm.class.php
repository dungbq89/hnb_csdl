<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/23/15
 * Time: 12:17 AM
 */
class VanbanphapquyForm extends Basecsdl_vanbanphapquyForm
{
    public function configure()
    {
        $years = range(date('Y'), date('Y') + 20);
        unset($this['created_by'],$this['updated_by'],$this['created_at'],$this['updated_at'],$this['hoivien_id']);
        $this->setWidgets(array(
            'id'             => new sfWidgetFormInputHidden(),
            'matailieu'      => new sfWidgetFormInputText(),
            'kyhieu'         => new sfWidgetFormInputText(),
            'sotailieu'      => new sfWidgetFormInputText(),
            'ngaybanhanh'    => new sfWidgetFormDateTime(array(
                    'date' => array(
                        'format' => '%day%/%month%/%year%',
                        'can_be_empty' => false,
                        'years' => array_combine($years, $years)
                    ),
                    'format' => '%date%',
                    'default' => date('Y/m/d', time())
                )),
            'ngayhieuluc'    =>new sfWidgetFormDateTime(array(
                    'date' => array(
                        'format' => '%day%/%month%/%year%',
                        'can_be_empty' => false,
                        'years' => array_combine($years, $years)
                    ),
                    'format' => '%date%',
                    'default' => date('Y/m/d', time())
                )),
            'ngayhethieuluc' => new sfWidgetFormDateTime(array(
                    'date' => array(
                        'format' => '%day%/%month%/%year%',
                        'can_be_empty' => false,
                        'years' => array_combine($years, $years)
                    ),
                    'format' => '%date%',
                    'default' => date('Y/m/d', time())
                )),
            'tentailieu'     => new sfWidgetFormInputText(),
            'trichdan'       => new sfWidgetFormTextarea(),
            'anhdaidien'     => new sfWidgetFormInputText(),
            'filedownload'   => new sfWidgetFormInputText(),
            'trangthai'      => new sfWidgetFormInputCheckbox(),
            'loaivanban_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('loai_vbpq'), 'add_empty' => true)),

        ));

        $this->setValidators(array(
            'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'matailieu'      => new sfValidatorString(array('max_length' => 25, 'required' => false)),
            'kyhieu'         => new sfValidatorString(array('max_length' => 25, 'required' => false)),
            'sotailieu'      => new sfValidatorString(array('max_length' => 25, 'required' => false)),
            'ngaybanhanh'    => new sfValidatorDateTime(array('required' => false)),
            'ngayhieuluc'    => new sfValidatorDateTime(array('required' => false)),
            'ngayhethieuluc' => new sfValidatorDateTime(array('required' => false)),
            'tentailieu'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
            'trichdan'       => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
            'anhdaidien'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
            'filedownload'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
            'trangthai'      => new sfValidatorBoolean(array('required' => false)),
            'loaivanban_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('loai_vbpq'), 'required' => false)),

        ));

        $this->widgetSchema->setNameFormat('csdl_vanbanphapquy[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }
}