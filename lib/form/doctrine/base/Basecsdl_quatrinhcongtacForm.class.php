<?php

/**
 * csdl_quatrinhcongtac form base class.
 *
 * @method csdl_quatrinhcongtac getObject() Returns the current form's model object
 *
 * @package    Vt_Portals
 * @subpackage form
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basecsdl_quatrinhcongtacForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'hoivien_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('csdlHoivien'), 'add_empty' => true)),
      'donvi_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('csdlCoquanbaochi'), 'add_empty' => true)),
      'thoigian'   => new sfWidgetFormInputText(),
      'batdau'     => new sfWidgetFormDateTime(),
      'ketthuc'    => new sfWidgetFormDateTime(),
      'chucvu'     => new sfWidgetFormInputText(),
      'mota'       => new sfWidgetFormTextarea(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_by' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'hoivien_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('csdlHoivien'), 'required' => false)),
      'donvi_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('csdlCoquanbaochi'), 'required' => false)),
      'thoigian'   => new sfValidatorInteger(array('required' => false)),
      'batdau'     => new sfValidatorDateTime(array('required' => false)),
      'ketthuc'    => new sfValidatorDateTime(array('required' => false)),
      'chucvu'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'mota'       => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
      'created_by' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'required' => false)),
      'updated_by' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('csdl_quatrinhcongtac[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'csdl_quatrinhcongtac';
  }

}
