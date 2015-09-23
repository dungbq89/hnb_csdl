<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/22/15
 * Time: 11:57 PM
 */
class CoquanbanhanhFormFilter extends Basecsdl_coquanbanhanhFormFilter
{
    public function configure()
    {
        $this->setWidgets(array(

            'tendonvi'     => new sfWidgetFormFilterInput(array('with_empty'=>false)),

        ));

        $this->setValidators(array(

            'tendonvi'     => new sfValidatorPass(array('required' => false)),

        ));

        $this->widgetSchema->setNameFormat('csdl_coquanbanhanh_filters[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }
}