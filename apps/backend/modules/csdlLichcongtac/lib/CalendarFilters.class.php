<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/20/15
 * Time: 11:00 AM
 */

class CalendarFilter extends Basecsdl_lichcongtacFormFilter
{
    public function configure()
    {
        unset($this['created_by'],$this['updated_by'],$this['created_at'],$this['updated_at']);
        $this->setWidgets(array(
            'hoivien_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
            'tieude'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
            'start_time'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormVnDatePicker(array(), array('readonly' => 'readonly')), 'to_date' => new sfWidgetFormVnDatePicker(array(), array('readonly' => 'readonly')),
                    'with_empty' => false, 'template'=>'Từ ngày %from_date%<br />Đến ngày %to_date%')),
        ));

        $this->setValidators(array(
            'hoivien_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'tieude'     => new sfValidatorPass(array('required' => false)),
            'start_time'    =>  new sfValidatorDateRange(array('required' => false,
                        'from_date' => new sfValidatorDateTime(array('required' => false,'datetime_output' => 'Y-m-d 00:00:00'), array()),
                        'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59'), array())),
                    array('invalid'=>'Ngày bắt đầu phải nhỏ hơn ngày kết thúc.')),

        ));

        $this->widgetSchema->setNameFormat('csdl_lichcongtac_filters[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }
}
