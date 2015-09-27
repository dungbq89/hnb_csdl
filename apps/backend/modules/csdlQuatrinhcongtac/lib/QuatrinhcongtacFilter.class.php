<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/27/15
 * Time: 12:22 AM
 */
class QuatrinhcongtacFormFilter extends Basecsdl_quatrinhcongtacFormFilter
{
    public function configure()
    {
        $this->setWidgets(array(
            'hoivien_id' => new sfWidgetFormFilterInput(array('with_empty'=>false)),
            'donvi_id'   => new sfWidgetFormFilterInput(),
            'thoigian'   => new sfWidgetFormFilterInput(),
            'batdau'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'ketthuc'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'chucvu'     => new sfWidgetFormFilterInput(),
            'mota'       => new sfWidgetFormFilterInput(),

        ));

        $this->setValidators(array(
            'hoivien_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'donvi_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'thoigian'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'batdau'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'ketthuc'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'chucvu'     => new sfValidatorPass(array('required' => false)),
            'mota'       => new sfValidatorPass(array('required' => false)),

        ));

        $this->widgetSchema->setNameFormat('csdl_quatrinhcongtac_filters[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }
}
