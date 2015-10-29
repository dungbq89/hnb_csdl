<?php

/**
 * csdl_thehoivien form base class.
 *
 * @method csdl_thehoivien getObject() Returns the current form's model object
 *
 * @package    Vt_Portals
 * @subpackage form
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basecsdl_thehoivienForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'hoivien_id' => new sfWidgetFormInputText(),
      'mathe'      => new sfWidgetFormInputText(),
      'sothe'      => new sfWidgetFormInputText(),
      'anhdaidien' => new sfWidgetFormInputText(),
      'ngaycap'    => new sfWidgetFormDateTime(),
      'ngayhethan' => new sfWidgetFormDateTime(),
      'nguoiky'    => new sfWidgetFormInputText(),
      'ngayky'     => new sfWidgetFormDateTime(),
      'trangthai'  => new sfWidgetFormInputCheckbox(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'hoivien_id' => new sfValidatorInteger(array('required' => false)),
      'mathe'      => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'sothe'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'anhdaidien' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ngaycap'    => new sfValidatorDateTime(array('required' => false)),
      'ngayhethan' => new sfValidatorDateTime(array('required' => false)),
      'nguoiky'    => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'ngayky'     => new sfValidatorDateTime(array('required' => false)),
      'trangthai'  => new sfValidatorBoolean(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('csdl_thehoivien[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'csdl_thehoivien';
  }

}
