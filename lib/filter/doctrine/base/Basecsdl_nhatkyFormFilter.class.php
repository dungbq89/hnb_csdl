<?php

/**
 * csdl_nhatky filter form base class.
 *
 * @package    Vt_Portals
 * @subpackage filter
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basecsdl_nhatkyFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'hoivien_id' => new sfWidgetFormFilterInput(),
      'tieude'     => new sfWidgetFormFilterInput(),
      'trichyeu'   => new sfWidgetFormFilterInput(),
      'noidung'    => new sfWidgetFormFilterInput(),
      'anhdaidien' => new sfWidgetFormFilterInput(),
      'trangthai'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'ngaytao'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'hoivien_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tieude'     => new sfValidatorPass(array('required' => false)),
      'trichyeu'   => new sfValidatorPass(array('required' => false)),
      'noidung'    => new sfValidatorPass(array('required' => false)),
      'anhdaidien' => new sfValidatorPass(array('required' => false)),
      'trangthai'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'ngaytao'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('csdl_nhatky_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'csdl_nhatky';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'hoivien_id' => 'Number',
      'tieude'     => 'Text',
      'trichyeu'   => 'Text',
      'noidung'    => 'Text',
      'anhdaidien' => 'Text',
      'trangthai'  => 'Boolean',
      'ngaytao'    => 'Date',
    );
  }
}
