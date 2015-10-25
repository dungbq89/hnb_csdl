<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/24/15
 * Time: 12:35 AM
 */
class DanhbaFormFilter extends Basecsdl_danhbaFormFilter
{
    public function configure()
    {
        $this->setWidgets(array(
            'hoten'      => new sfWidgetFormFilterInput(array('with_empty'=>false)),
            'ngaysinh'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'gioitinh'   => new sfWidgetFormFilterInput(),
            'diachi'     => new sfWidgetFormFilterInput(),
            'dienthoai'  => new sfWidgetFormFilterInput(array('with_empty'=>false)),
            'email'      => new sfWidgetFormFilterInput(array('with_empty'=>false)),
            'donvi'      => new sfWidgetFormFilterInput(array('with_empty'=>false)),

        ));

        $this->setValidators(array(
            'hoten'      => new sfValidatorPass(array('required' => false)),
            'ngaysinh'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'gioitinh'   => new sfValidatorPass(array('required' => false)),
            'diachi'     => new sfValidatorPass(array('required' => false)),
            'dienthoai'  => new sfValidatorPass(array('required' => false)),
            'email'      => new sfValidatorPass(array('required' => false)),
            'donvi'      => new sfValidatorPass(array('required' => false)),

        ));

        $this->widgetSchema->setNameFormat('csdl_danhba_filters[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }
}
