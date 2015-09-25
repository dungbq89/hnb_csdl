<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/24/15
 * Time: 12:55 AM
 */
class LoaitailieuFormFilter extends Basecsdl_loaitailieuFormFilter
{
    public function configure()
    {
        $this->setWidgets(array(
            'madanhmuc'  => new sfWidgetFormFilterInput(),
            'tendanhmuc' => new sfWidgetFormFilterInput(array('with_empty'=>false)),
            'gioithieu'  => new sfWidgetFormFilterInput(),
            'anhdaidien' => new sfWidgetFormFilterInput(),
            'thutu'      => new sfWidgetFormFilterInput(),
            'trangthai'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),

        ));

        $this->setValidators(array(
            'madanhmuc'  => new sfValidatorPass(array('required' => false)),
            'tendanhmuc' => new sfValidatorPass(array('required' => false)),
            'gioithieu'  => new sfValidatorPass(array('required' => false)),
            'anhdaidien' => new sfValidatorPass(array('required' => false)),
            'thutu'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'trangthai'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),

        ));

        $this->widgetSchema->setNameFormat('csdl_loaitailieu_filters[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }
}
