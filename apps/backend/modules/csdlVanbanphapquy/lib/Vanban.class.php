<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/23/15
 * Time: 12:05 AM
 */
class VanbanphapquyFormFilter extends Basecsdl_vanbanphapquyFormFilter
{
    public function configure()
    {
        $this->setWidgets(array(
            'matailieu'      => new sfWidgetFormFilterInput(),
            'kyhieu'         => new sfWidgetFormFilterInput(array('with_empty'=>false)),
            'sotailieu'      => new sfWidgetFormFilterInput(),
            'ngaybanhanh'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'ngayhieuluc'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'ngayhethieuluc' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'tentailieu'     => new sfWidgetFormFilterInput(array('with_empty'=>false)),
            'trichdan'       => new sfWidgetFormFilterInput(),
            'anhdaidien'     => new sfWidgetFormFilterInput(),
            'filedownload'   => new sfWidgetFormFilterInput(),
            'trangthai'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
            'loaivanban_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('loai_vbpq'), 'add_empty' => true)),

        ));

        $this->setValidators(array(
            'matailieu'      => new sfValidatorPass(array('required' => false)),
            'kyhieu'         => new sfValidatorPass(array('required' => false)),
            'sotailieu'      => new sfValidatorPass(array('required' => false)),
            'ngaybanhanh'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'ngayhieuluc'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'ngayhethieuluc' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'tentailieu'     => new sfValidatorPass(array('required' => false)),
            'trichdan'       => new sfValidatorPass(array('required' => false)),
            'anhdaidien'     => new sfValidatorPass(array('required' => false)),
            'filedownload'   => new sfValidatorPass(array('required' => false)),
            'trangthai'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
            'loaivanban_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('loai_vbpq'), 'column' => 'id')),

        ));

        $this->widgetSchema->setNameFormat('csdl_vanbanphapquy_filters[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }
}