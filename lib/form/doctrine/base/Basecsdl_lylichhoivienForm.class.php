<?php

/**
 * csdl_lylichhoivien form base class.
 *
 * @method csdl_lylichhoivien getObject() Returns the current form's model object
 *
 * @package    Vt_Portals
 * @subpackage form
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basecsdl_lylichhoivienForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'hoivien_id' => new sfWidgetFormInputText(),
      'ngaysinh'   => new sfWidgetFormDateTime(),
      'gioitinh'   => new sfWidgetFormInputText(),
      'diachi'     => new sfWidgetFormInputText(),
      'maquan'     => new sfWidgetFormInputText(),
      'matinh'     => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'hoivien_id' => new sfValidatorInteger(array('required' => false)),
      'ngaysinh'   => new sfValidatorDateTime(array('required' => false)),
      'gioitinh'   => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'diachi'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'maquan'     => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'matinh'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('csdl_lylichhoivien[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'csdl_lylichhoivien';
  }

}
