<?php

/**
 * csdl_nhatky form base class.
 *
 * @method csdl_nhatky getObject() Returns the current form's model object
 *
 * @package    Vt_Portals
 * @subpackage form
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basecsdl_nhatkyForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'hoivien_id' => new sfWidgetFormInputText(),
      'tieude'     => new sfWidgetFormInputText(),
      'machucnang' => new sfWidgetFormInputText(),
      'module'     => new sfWidgetFormInputText(),
      'ngaytao'    => new sfWidgetFormDateTime(),
      'ip'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'hoivien_id' => new sfValidatorInteger(array('required' => false)),
      'tieude'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'machucnang' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'module'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ngaytao'    => new sfValidatorDateTime(array('required' => false)),
      'ip'         => new sfValidatorString(array('max_length' => 25, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('csdl_nhatky[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'csdl_nhatky';
  }

}
