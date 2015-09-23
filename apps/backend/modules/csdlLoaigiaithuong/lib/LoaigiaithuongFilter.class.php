<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/24/15
 * Time: 12:19 AM
 */
class LoaigiaithuongFormFilter extends Basecsdl_loaigiaithuongFormFilter
{
    public function configure()
    {
        $this->setWidgets(array(
            'madanhmuc'   => new sfWidgetFormFilterInput(),
            'tendanhmuc'  => new sfWidgetFormFilterInput(array('with_empty'=>false)),
            'linhvuc'     => new sfWidgetFormFilterInput(),
            'donvitochuc' => new sfWidgetFormFilterInput(),
            'gioithieu'   => new sfWidgetFormFilterInput(),
            'anhdaidien'  => new sfWidgetFormFilterInput(),
            'thutu'       => new sfWidgetFormFilterInput(),
            'trangthai'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),

        ));

        $this->setValidators(array(
            'madanhmuc'   => new sfValidatorPass(array('required' => false)),
            'tendanhmuc'  => new sfValidatorPass(array('required' => false)),
            'linhvuc'     => new sfValidatorPass(array('required' => false)),
            'donvitochuc' => new sfValidatorPass(array('required' => false)),
            'gioithieu'   => new sfValidatorPass(array('required' => false)),
            'anhdaidien'  => new sfValidatorPass(array('required' => false)),
            'thutu'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'trangthai'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),

        ));

        $this->widgetSchema->setNameFormat('csdl_loaigiaithuong_filters[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }
}