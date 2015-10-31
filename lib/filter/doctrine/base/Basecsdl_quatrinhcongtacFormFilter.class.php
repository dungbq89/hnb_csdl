<?php

/**
 * csdl_quatrinhcongtac filter form base class.
 *
 * @package    Vt_Portals
 * @subpackage filter
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basecsdl_quatrinhcongtacFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'hoivien_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('csdlHoivien'), 'add_empty' => true)),
      'donvi_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('csdlCoquanbaochi'), 'add_empty' => true)),
      'thoigian'   => new sfWidgetFormFilterInput(),
      'batdau'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'ketthuc'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'chucvu'     => new sfWidgetFormFilterInput(),
      'mota'       => new sfWidgetFormFilterInput(),
      'noicongtac' => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'hoivien_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('csdlHoivien'), 'column' => 'id')),
      'donvi_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('csdlCoquanbaochi'), 'column' => 'id')),
      'thoigian'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'batdau'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'ketthuc'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'chucvu'     => new sfValidatorPass(array('required' => false)),
      'mota'       => new sfValidatorPass(array('required' => false)),
      'noicongtac' => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CreatedBy'), 'column' => 'id')),
      'updated_by' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UpdatedBy'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('csdl_quatrinhcongtac_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'csdl_quatrinhcongtac';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'hoivien_id' => 'ForeignKey',
      'donvi_id'   => 'ForeignKey',
      'thoigian'   => 'Number',
      'batdau'     => 'Date',
      'ketthuc'    => 'Date',
      'chucvu'     => 'Text',
      'mota'       => 'Text',
      'noicongtac' => 'Text',
      'created_at' => 'Date',
      'updated_at' => 'Date',
      'created_by' => 'ForeignKey',
      'updated_by' => 'ForeignKey',
    );
  }
}
