<?php

/**
 * csdl_tacpham form base class.
 *
 * @method csdl_tacpham getObject() Returns the current form's model object
 *
 * @package    Vt_Portals
 * @subpackage form
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basecsdl_tacphamForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'hoivien_id'   => new sfWidgetFormInputText(),
      'tentacpham'   => new sfWidgetFormInputText(),
      'gioithieu'    => new sfWidgetFormTextarea(),
      'anhdaidien'   => new sfWidgetFormInputText(),
      'filedownload' => new sfWidgetFormInputText(),
      'ngayxuatban'  => new sfWidgetFormDateTime(),
      'tacgia_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('csdlTacgia'), 'add_empty' => true)),
      'chude_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('csdlChude'), 'add_empty' => true)),
      'status'       => new sfWidgetFormInputText(),
      'created_by'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'hoivien_id'   => new sfValidatorInteger(array('required' => false)),
      'tentacpham'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'gioithieu'    => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'anhdaidien'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'filedownload' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ngayxuatban'  => new sfValidatorDateTime(array('required' => false)),
      'tacgia_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('csdlTacgia'), 'required' => false)),
      'chude_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('csdlChude'), 'required' => false)),
      'status'       => new sfValidatorInteger(array('required' => false)),
      'created_by'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'required' => false)),
      'updated_by'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('csdl_tacpham[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'csdl_tacpham';
  }

}
