<?php

/**
 * csdl_tailieunghiepvu filter form base class.
 *
 * @package    Vt_Portals
 * @subpackage filter
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basecsdl_tailieunghiepvuFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'matailieu'    => new sfWidgetFormFilterInput(),
      'kyhieu'       => new sfWidgetFormFilterInput(),
      'sotailieu'    => new sfWidgetFormFilterInput(),
      'tentailieu'   => new sfWidgetFormFilterInput(),
      'trichdan'     => new sfWidgetFormFilterInput(),
      'anhdaidien'   => new sfWidgetFormFilterInput(),
      'filedownload' => new sfWidgetFormFilterInput(),
      'trangthai'    => new sfWidgetFormFilterInput(),
      'created_by'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'matailieu'    => new sfValidatorPass(array('required' => false)),
      'kyhieu'       => new sfValidatorPass(array('required' => false)),
      'sotailieu'    => new sfValidatorPass(array('required' => false)),
      'tentailieu'   => new sfValidatorPass(array('required' => false)),
      'trichdan'     => new sfValidatorPass(array('required' => false)),
      'anhdaidien'   => new sfValidatorPass(array('required' => false)),
      'filedownload' => new sfValidatorPass(array('required' => false)),
      'trangthai'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_by'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CreatedBy'), 'column' => 'id')),
      'updated_by'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UpdatedBy'), 'column' => 'id')),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('csdl_tailieunghiepvu_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'csdl_tailieunghiepvu';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'matailieu'    => 'Text',
      'kyhieu'       => 'Text',
      'sotailieu'    => 'Text',
      'tentailieu'   => 'Text',
      'trichdan'     => 'Text',
      'anhdaidien'   => 'Text',
      'filedownload' => 'Text',
      'trangthai'    => 'Number',
      'created_by'   => 'ForeignKey',
      'updated_by'   => 'ForeignKey',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
    );
  }
}
