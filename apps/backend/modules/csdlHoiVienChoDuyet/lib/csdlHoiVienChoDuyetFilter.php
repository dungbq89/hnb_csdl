<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/26/15
 * Time: 10:36 PM
 */
class csdlHoiVienChoDuyetFilter extends Basecsdl_lylichhoivienFormFilter
{
    public function configure()
    {
        $this->setWidgets(array(
            'ten'           => new sfWidgetFormFilterInput(array('with_empty' => false))
        ));

        $this->setValidators(array(
            'ten'           => new sfValidatorPass(array('required' => false))

        ));
        $this->widgetSchema->setNameFormat('csdl_hoivienchoduyet_filters[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    }
    public function addTenColumnQuery($query, $field, $values){
        if(isset($values['text'])){
            $query =  $query->where("ten LIKE ? OR hodem LIKE ?", array( "%" . $values['text'] . "%",  "%" . $values['text'] . "%"));
            return $query;
        }
    }
}
