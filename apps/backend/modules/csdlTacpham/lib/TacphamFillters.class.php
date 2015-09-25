<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/22/15
 * Time: 10:51 PM
 */
class TacphamFillters extends Basecsdl_tacphamFormFilter
{
    public function configure()
    {
        $this->setWidgets(array(
            'hoivien_id'   => new sfWidgetFormFilterInput(),
            'tentacpham'   => new sfWidgetFormFilterInput(array('with_empty'=>false)),
            'tacgia_id'    => new sfWidgetFormFilterInput(array('with_empty'=>false)),
            'chude_id'     => new sfWidgetFormFilterInput(array('with_empty'=>false)),

        ));

        $this->setValidators(array(
            'hoivien_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'tentacpham'   => new sfValidatorPass(array('required' => false)),
            'tacgia_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'chude_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
        ));

        $this->widgetSchema->setNameFormat('csdl_tacpham_filters[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }
}