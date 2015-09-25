<?php

/**
 * Created by JetBrains PhpStorm.
 * User: ngoctv1
 * Date: 4/24/14
 * Time: 12:02 PM
 * To change this template use File | Settings | File Templates.
 */
class csdlLyLichHoiVienAdminForm extends Basecsdl_lylichhoivienForm {

    public function configure() {
        $i18n = sfContext::getInstance()->getI18N();
        unset($this['created_at'], $this['updated_at'], $this['created_at'], $this['updated_at']);

        $this->widgetSchema['gioithieu'] = new sfWidgetFormTextarea(array());
        $this->validatorSchema['gioithieu'] = new sfValidatorString(array('required' => false, 'trim' => true, 'max_length' => 500));

        $this->widgetSchema['thutu'] = new sfWidgetFormInputText(array('default' => 0), array('size' => 5, 'maxlength' => 5));
        $this->validatorSchema['thutu'] = new sfValidatorInteger(array('required' => false, "min"=>0, 'max'=>99999, 'trim' => true),array('min'=>$i18n->__('Thứ tự phải là số nguyên dương'),'max'=>$i18n->__('Tối đa 5 ký tự'),'invalid'=> $i18n->__('Thứ tự phải là số nguyên dương')));

        $this->widgetSchema['ngaysinh'] = new sfWidgetFormVnDatePicker(array(),array('readonly'=>true));
        $this->validatorSchema['ngaysinh'] = new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d H:i:s'));

        $this->widgetSchema['ngayvaodoan'] = new sfWidgetFormVnDatePicker(array(),array('readonly'=>true));
        $this->validatorSchema['ngayvaodoan'] = new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d H:i:s'));

        $this->widgetSchema['ngayvaodang'] = new sfWidgetFormVnDatePicker(array(),array('readonly'=>true));
        $this->validatorSchema['ngayvaodang'] = new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d H:i:s'));

        $this->widgetSchema['gioitinh'] = new  sfWidgetFormChoice(array(
            'choices' => $this->gioiTinh(),
            'multiple' => false,
            'expanded' => false
        ));
        $this->validatorSchema['gioitinh'] = new sfValidatorChoice(array(
            'required' => true,
            'choices' => array_keys($this->gioiTinh()),
        ));

        $this->widgetSchema['nghenghiep_id'] = new  sfWidgetFormChoice(array(
            'choices' => $this->getAllJob(),
            'multiple' => false,
            'expanded' => false
        ));
        $this->validatorSchema['nghenghiep_id'] = new sfValidatorChoice(array(
            'required' => true,
            'choices' => array_keys($this->getAllJob()),
        ));

        $this->widgetSchema['dantoc_id'] = new  sfWidgetFormChoice(array(
            'choices' => $this->geDanToc(),
            'multiple' => false,
            'expanded' => false
        ));
        $this->validatorSchema['dantoc_id'] = new sfValidatorChoice(array(
            'required' => true,
            'choices' => array_keys($this->geDanToc()),
        ));

        $this->widgetSchema->setNameFormat('csdl_lylichhoivien[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }

    protected function gioiTinh(){
        return array(
            "1" => "Nam",
            "0" => "Nữ"
        );
    }

    protected function getAllJob(){
        $arr[''] = array('-- Chọn nghề nghiệp --');
        $jobs = csdl_dmnghenghiepTable::getAllJob()->fetchArray();
        if($jobs){
            foreach($jobs as $job){
                $arr[$job['id']] = $job['tendanhmuc'];
            }
        }
        return $arr;
    }

    protected function geDanToc(){
        $arr[''] = array('-- Chọn dân tộc --');
        $jobs = csdl_dantocTable::getDanToc()->fetchArray();
        if($jobs){
            foreach($jobs as $job){
                $arr[$job['id']] = $job['tendantoc'];
            }
        }
        return $arr;
    }

}
