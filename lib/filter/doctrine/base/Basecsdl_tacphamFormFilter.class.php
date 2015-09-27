<?php

/**
 * csdl_tacpham filter form base class.
 *
 * @package    Vt_Portals
 * @subpackage filter
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basecsdl_tacphamFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'hoivien_id'   => new sfWidgetFormFilterInput(),
      'tentacpham'   => new sfWidgetFormFilterInput(),
      'gioithieu'    => new sfWidgetFormFilterInput(),
      'anhdaidien'   => new sfWidgetFormFilterInput(),
      'filedownload' => new sfWidgetFormFilterInput(),
      'ngayxuatban'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'tacgia_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('csdlTacgia'), 'add_empty' => true)),
      'chude_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('csdlChude'), 'add_empty' => true)),
      'status'       => new sfWidgetFormFilterInput(),
      'created_by'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'hoivien_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tentacpham'   => new sfValidatorPass(array('required' => false)),
      'gioithieu'    => new sfValidatorPass(array('required' => false)),
      'anhdaidien'   => new sfValidatorPass(array('required' => false)),
      'filedownload' => new sfValidatorPass(array('required' => false)),
      'ngayxuatban'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'tacgia_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('csdlTacgia'), 'column' => 'id')),
      'chude_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('csdlChude'), 'column' => 'id')),
      'status'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_by'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CreatedBy'), 'column' => 'id')),
      'updated_by'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UpdatedBy'), 'column' => 'id')),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('csdl_tacpham_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'csdl_tacpham';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'hoivien_id'   => 'Number',
      'tentacpham'   => 'Text',
      'gioithieu'    => 'Text',
      'anhdaidien'   => 'Text',
      'filedownload' => 'Text',
      'ngayxuatban'  => 'Date',
      'tacgia_id'    => 'ForeignKey',
      'chude_id'     => 'ForeignKey',
      'status'       => 'Number',
      'created_by'   => 'ForeignKey',
      'updated_by'   => 'ForeignKey',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
    );
  }
}
