<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/26/15
 * Time: 10:51 PM
 */
class LylichhoivienDaduyetFormFilter extends Basecsdl_lylichhoivienFormFilter
{
    public function configure()
    {
        $this->setWidgets(array(
            'hoivien_id'    => new sfWidgetFormFilterInput(),
            'ten'           => new sfWidgetFormFilterInput(array('with_empty'=>false)),
            'hodem'         => new sfWidgetFormFilterInput(array('with_empty'=>false)),
            'ngaysinh'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'gioitinh'      => new sfWidgetFormFilterInput(),
            'diachi'        => new sfWidgetFormFilterInput(),
            'maquan'        => new sfWidgetFormFilterInput(),
            'matinh'        => new sfWidgetFormFilterInput(),
            'ngayvaodoan'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'noiketnapdoan' => new sfWidgetFormFilterInput(),
            'ngayvaodang'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'noiketnapdang' => new sfWidgetFormFilterInput(),
            'tieusu'        => new sfWidgetFormFilterInput(),
            'nghenghiep_id' => new sfWidgetFormFilterInput(),
            'dantoc_id'     => new sfWidgetFormFilterInput(),
            'quoctich'      => new sfWidgetFormFilterInput(),
            'donvi_id'      => new sfWidgetFormFilterInput(),
            'images'        => new sfWidgetFormFilterInput(),

        ));

        $this->setValidators(array(
            'hoivien_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'ten'           => new sfValidatorPass(array('required' => false)),
            'hodem'         => new sfValidatorPass(array('required' => false)),
            'ngaysinh'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'gioitinh'      => new sfValidatorPass(array('required' => false)),
            'diachi'        => new sfValidatorPass(array('required' => false)),
            'maquan'        => new sfValidatorPass(array('required' => false)),
            'matinh'        => new sfValidatorPass(array('required' => false)),
            'ngayvaodoan'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'noiketnapdoan' => new sfValidatorPass(array('required' => false)),
            'ngayvaodang'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'noiketnapdang' => new sfValidatorPass(array('required' => false)),
            'tieusu'        => new sfValidatorPass(array('required' => false)),
            'nghenghiep_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'dantoc_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'quoctich'      => new sfValidatorPass(array('required' => false)),
            'donvi_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'images'        => new sfValidatorPass(array('required' => false)),

        ));

        $this->widgetSchema->setNameFormat('csdl_lylichhoivien_filters[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    }
}