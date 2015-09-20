<?php

/**
 * csdl_lichcongtac filter form base class.
 *
 * @package    Vt_Portals
 * @subpackage filter
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basecsdl_lichcongtacFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'hoivien_id' => new sfWidgetFormFilterInput(),
      'tieude'     => new sfWidgetFormFilterInput(),
      'noidung'    => new sfWidgetFormFilterInput(),
      'start_time' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'end_time'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'diadiem'    => new sfWidgetFormFilterInput(),
      'thanhphan'  => new sfWidgetFormFilterInput(),
      'chuanbi'    => new sfWidgetFormFilterInput(),
      'chutri'     => new sfWidgetFormFilterInput(),
      'created_by' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'hoivien_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tieude'     => new sfValidatorPass(array('required' => false)),
      'noidung'    => new sfValidatorPass(array('required' => false)),
      'start_time' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'end_time'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'diadiem'    => new sfValidatorPass(array('required' => false)),
      'thanhphan'  => new sfValidatorPass(array('required' => false)),
      'chuanbi'    => new sfValidatorPass(array('required' => false)),
      'chutri'     => new sfValidatorPass(array('required' => false)),
      'created_by' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CreatedBy'), 'column' => 'id')),
      'updated_by' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UpdatedBy'), 'column' => 'id')),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('csdl_lichcongtac_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'csdl_lichcongtac';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'hoivien_id' => 'Number',
      'tieude'     => 'Text',
      'noidung'    => 'Text',
      'start_time' => 'Date',
      'end_time'   => 'Date',
      'diadiem'    => 'Text',
      'thanhphan'  => 'Text',
      'chuanbi'    => 'Text',
      'chutri'     => 'Text',
      'created_by' => 'ForeignKey',
      'updated_by' => 'ForeignKey',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
