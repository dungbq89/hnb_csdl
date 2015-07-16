<?php

/**
 * csdl_vanbanphapquy form base class.
 *
 * @method csdl_vanbanphapquy getObject() Returns the current form's model object
 *
 * @package    Vt_Portals
 * @subpackage form
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basecsdl_vanbanphapquyForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'matailieu'      => new sfWidgetFormInputText(),
      'kyhieu'         => new sfWidgetFormInputText(),
      'sotailieu'      => new sfWidgetFormInputText(),
      'ngaybanhanh'    => new sfWidgetFormDateTime(),
      'ngayhieuluc'    => new sfWidgetFormDateTime(),
      'ngayhethieuluc' => new sfWidgetFormDateTime(),
      'tentailieu'     => new sfWidgetFormInputText(),
      'trichdan'       => new sfWidgetFormTextarea(),
      'anhdaidien'     => new sfWidgetFormInputText(),
      'filedownload'   => new sfWidgetFormInputText(),
      'trangthai'      => new sfWidgetFormInputText(),
      'loaivanban_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('loai_vbpq'), 'add_empty' => true)),
      'created_by'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
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
      'trangthai'      => new sfValidatorInteger(array('required' => false)),
      'loaivanban_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('loai_vbpq'), 'required' => false)),
      'created_by'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'required' => false)),
      'updated_by'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('csdl_vanbanphapquy[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'csdl_vanbanphapquy';
  }

}
