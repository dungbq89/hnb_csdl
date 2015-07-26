<?php

/**
 * csdl_danhba form base class.
 *
 * @method csdl_danhba getObject() Returns the current form's model object
 *
 * @package    Vt_Portals
 * @subpackage form
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basecsdl_danhbaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'hoten'      => new sfWidgetFormInputText(),
      'ngaysinh'   => new sfWidgetFormDateTime(),
      'gioitinh'   => new sfWidgetFormInputText(),
      'diachi'     => new sfWidgetFormInputText(),
      'dienthoai'  => new sfWidgetFormInputText(),
      'email'      => new sfWidgetFormInputText(),
      'donvi'      => new sfWidgetFormInputText(),
      'created_by' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'hoten'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ngaysinh'   => new sfValidatorDateTime(array('required' => false)),
      'gioitinh'   => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'diachi'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'dienthoai'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'donvi'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_by' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'required' => false)),
      'updated_by' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('csdl_danhba[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'csdl_danhba';
  }

}
