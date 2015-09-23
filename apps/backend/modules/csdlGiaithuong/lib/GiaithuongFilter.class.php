<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/24/15
 * Time: 12:24 AM
 */
class GiaithuongFormFilter extends Basecsdl_giaithuongFormFilter
{
    public function configure()
    {
        $this->setWidgets(array(
            'tengiaithuong' => new sfWidgetFormFilterInput(array('with_empty'=>false)),
            'madanhmuc'     => new sfWidgetFormFilterInput(array('with_empty'=>false)),
            'namtochuc'     => new sfWidgetFormFilterInput(array('with_empty'=>false)),
            'giatri'        => new sfWidgetFormFilterInput(array('with_empty'=>false)),

        ));

        $this->setValidators(array(
            'tengiaithuong' => new sfValidatorPass(array('required' => false)),
            'madanhmuc'     => new sfValidatorPass(array('required' => false)),
            'namtochuc'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'giatri'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),

        ));

        $this->widgetSchema->setNameFormat('csdl_giaithuong_filters[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    }
}