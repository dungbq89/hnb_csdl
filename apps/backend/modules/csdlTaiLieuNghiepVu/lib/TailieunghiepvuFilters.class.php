<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/24/15
 * Time: 12:13 AM
 */
class TailieunghiepvuFormFilter extends Basecsdl_tailieunghiepvuFormFilter
{
    public function configure()
    {
        $this->setWidgets(array(
            'matailieu'    => new sfWidgetFormFilterInput(),
            'kyhieu'       => new sfWidgetFormFilterInput(array('with_empty'=>false)),
            'sotailieu'    => new sfWidgetFormFilterInput(),
            'tentailieu'   => new sfWidgetFormFilterInput(array('with_empty'=>false)),
            'trichdan'     => new sfWidgetFormFilterInput(),
            'anhdaidien'   => new sfWidgetFormFilterInput(),
            'filedownload' => new sfWidgetFormFilterInput(),
            'trangthai'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),

        ));

        $this->setValidators(array(
            'matailieu'    => new sfValidatorPass(array('required' => false)),
            'kyhieu'       => new sfValidatorPass(array('required' => false)),
            'sotailieu'    => new sfValidatorPass(array('required' => false)),
            'tentailieu'   => new sfValidatorPass(array('required' => false)),
            'trichdan'     => new sfValidatorPass(array('required' => false)),
            'anhdaidien'   => new sfValidatorPass(array('required' => false)),
            'filedownload' => new sfValidatorPass(array('required' => false)),
            'trangthai'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),

        ));

        $this->widgetSchema->setNameFormat('csdl_tailieunghiepvu_filters[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }
}