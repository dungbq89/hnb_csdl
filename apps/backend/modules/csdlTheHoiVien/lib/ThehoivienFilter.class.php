<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/26/15
 * Time: 10:36 PM
 */
class ThehoivienFormFilter extends Basecsdl_thehoivienFormFilter
{
    public function configure()
    {
        $this->setWidgets(array(
            'hoivien_id' => new sfWidgetFormFilterInput(array('with_empty'=>false)),
            'mathe'      => new sfWidgetFormFilterInput(array('with_empty'=>false)),
            'anhdaidien' => new sfWidgetFormFilterInput(),
            'ngaycap'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'ngayhethan' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'nguoiky'    => new sfWidgetFormFilterInput(),
            'ngayky'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
            'trangthai'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
        ));

        $this->setValidators(array(
            'hoivien_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
            'mathe'      => new sfValidatorPass(array('required' => false)),
            'anhdaidien' => new sfValidatorPass(array('required' => false)),
            'ngaycap'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'ngayhethan' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'nguoiky'    => new sfValidatorPass(array('required' => false)),
            'ngayky'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
            'trangthai'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
        ));

//        $this->widgetSchema['name'] =  new sfWidgetFormInputText(array(
//            'label' => 'Hội viên'
//        ));
//
//        //Type of validator for filter
//        $this->validatorSchema['name'] = new sfValidatorPass(array ('required' => false));
        $this->widgetSchema->setNameFormat('csdl_thehoivien_filters[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    }

//    public function getFields()
//    {
//        $fields = parent::getFields();
//        //the right 'virtual_column_name' is the method to filter
//        $fields['name'] = 'name';
//        return $fields;
//    }
//
//    public function addNameColumnQuery($query, $field, $value)
//    {
//        //add your filter query!
//        //for example in your case
//        $rootAlias = $query->getRootAlias();
//        $query->innerJoin($rootAlias . '.sf_guard_user u');
//
//        //remember to return the $query!
//        return $query;
//    }
}
