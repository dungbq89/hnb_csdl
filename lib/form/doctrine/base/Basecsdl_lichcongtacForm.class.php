<?php

/**
 * csdl_lichcongtac form base class.
 *
 * @method csdl_lichcongtac getObject() Returns the current form's model object
 *
 * @package    Vt_Portals
 * @subpackage form
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basecsdl_lichcongtacForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'hoivien_id' => new sfWidgetFormInputText(),
      'tieude'     => new sfWidgetFormInputText(),
      'noidung'    => new sfWidgetFormTextarea(),
      'start_time' => new sfWidgetFormDateTime(),
      'end_time'   => new sfWidgetFormDateTime(),
      'diadiem'    => new sfWidgetFormInputText(),
      'thanhphan'  => new sfWidgetFormTextarea(),
      'chuanbi'    => new sfWidgetFormTextarea(),
      'chutri'     => new sfWidgetFormTextarea(),
      'created_by' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'hoivien_id' => new sfValidatorInteger(array('required' => false)),
      'tieude'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'noidung'    => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'start_time' => new sfValidatorDateTime(array('required' => false)),
      'end_time'   => new sfValidatorDateTime(array('required' => false)),
      'diadiem'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'thanhphan'  => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'chuanbi'    => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'chutri'     => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'created_by' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'required' => false)),
      'updated_by' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('csdl_lichcongtac[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'csdl_lichcongtac';
  }

}
