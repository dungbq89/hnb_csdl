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
        $years = range(date('Y'), date('Y') - 75);
        $i18n = sfContext::getInstance()->getI18N();
        unset($this['created_at'], $this['updated_at'], $this['created_at'], $this['updated_at']);

        $this->widgetSchema['gioithieu'] = new sfWidgetFormTextarea(array());
        $this->validatorSchema['gioithieu'] = new sfValidatorString(array('required' => false, 'trim' => true, 'max_length' => 500));

        $this->widgetSchema['thutu'] = new sfWidgetFormInputText(array('default' => 0), array('size' => 5, 'maxlength' => 5));
        $this->validatorSchema['thutu'] = new sfValidatorInteger(array('required' => false, "min"=>0, 'max'=>99999, 'trim' => true),array('min'=>$i18n->__('Thứ tự phải là số nguyên dương'),'max'=>$i18n->__('Tối đa 5 ký tự'),'invalid'=> $i18n->__('Thứ tự phải là số nguyên dương')));

        $this->widgetSchema['ngaysinh'] = new sfWidgetFormDateTime(array(
            'date' => array(
                'format' => '%day%/%month%/%year%',
                'can_be_empty' => false,
                'years' => array_combine($years, $years)
            ),
            'format' => '%date%',
            'default' => date('Y/m/d H:i', time())
        ));
        $this->validatorSchema['ngaysinh'] = new sfValidatorDateTime(array('required' => true));

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

        $this->widgetSchema['donvi_id'] = new sfWidgetFormChoice(array(
            'choices' => $this->getDonVi(),
            'multiple' => false,
            'expanded' => false));
        $this->validatorSchema['donvi_id'] = new sfValidatorChoice(array(
            'required' => false,
            'choices' => array_keys($this->getDonVi()),));

        $this->widgetSchema['tacpham_id'] = new sfWidgetFormChoice(array(
            'choices' => $this->getTacPham(),
            'multiple' => false,
            'expanded' => false));
        $this->validatorSchema['tacpham_id'] = new sfValidatorChoice(array(
            'required' => false,
            'choices' => array_keys($this->getTacPham()),));

        $this->widgetSchema['matinh'] = new sfWidgetFormChoice(array(
            'choices' => $this->getCity(),
            'multiple' => false,
            'expanded' => false));
        $this->validatorSchema['matinh'] = new sfValidatorChoice(array(
            'required' => false,
            'choices' => array_keys($this->getCity()),));

        $this->widgetSchema['maquan'] = new sfWidgetFormChoice(array(
            'choices' => $this->getProvince(),
            'multiple' => false,
            'expanded' => false));
        $this->validatorSchema['maquan'] = new sfValidatorChoice(array(
            'required' => false,
            'choices' => array_keys($this->getProvinceKey()),));

        $this->widgetSchema['images'] = new sfWidgetFormInputFileEditable(array(
            'label' => ' ',
            'file_src' => VtHelper::getUrlImagePathThumb(sfConfig::get('app_member_images'), $this->getObject()->getImages()),
            'is_image' => true,
            'edit_mode' => !$this->isNew(),
            'template' => '<div>%file%<br />%input%</div>',
        ));

        $this->validatorSchema['images'] = new sfValidatorFileViettel(
            array(
                'max_size' => sfConfig::get('app_image_maxsize', 999999),
                'mime_types' => array('image/jpeg','image/jpg', 'image/png', 'image/gif'),
                'path' => sfConfig::get("sf_upload_dir") . '/' . sfConfig::get('app_member_images'),
                'required' => false
            ),
            array(
                'mime_types' => $i18n->__('Bạn phải tải lên file hình ảnh.'),
                'max_size' => $i18n->__('Tối đa 5MB')
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


    protected function getDonVi(){
        $arrJobs = array(''=>'----- Chọn đơn vị -----');
        $jobs = csdl_coquanbaochiTable::dsCoquan()->fetchArray();
        if(count($jobs)>0){
            foreach($jobs as $value){
                $arrJobs[$value['id']] = $value['tendonvi'];
            }
        }
        return $arrJobs;
    }

    protected function getCity(){
        $arrJobs = array(''=>'----- Chọn tỉnh/thành phố -----');
        $jobs = csdl_areaTable::getCity()->fetchArray();
        if(count($jobs)>0){
            foreach($jobs as $value){
                $arrJobs[$value['PROVINCE']] = $value['NAME'];
            }
        }
        return $arrJobs;
    }

    protected function getProvince(){
        $arrJobs = array(''=>'----- Chọn quận/huyện -----');
        return $arrJobs;
    }

    protected function getProvinceKey(){
        $arrJobs = array(''=>'----- Chọn quận/huyện -----');
        $jobs = csdl_areaTable::getProvinceKey()->fetchArray();
        if(count($jobs)>0){
            foreach($jobs as $value){
                $arrJobs[$value['DISTRICT']] = $value['NAME'];
            }
        }
        return $arrJobs;
    }

    protected function getTacPham(){
        $arrTacpham = array(''=>'----- Chọn tác phẩm -----');
        $tacPhams = csdl_tacphamTable::getListTacpham();
        if(count($tacPhams)>0){
            foreach($tacPhams as $value){
                $arrTacpham[$value->id] = $value->tentacpham;
            }
        }
        return $arrTacpham;
    }

    protected function getGiaiThuong(){
        $arrGiaiThuong = array(''=>'----- Chọn giải thưởng -----');
        $giaiThuong = csdl_giaithuongTable::getListTacpham();
        if(count($giaiThuong)>0){
            foreach($giaiThuong as $value){
                $arrGiaiThuong[$value->id] = $value->tentacpham;
            }
        }
        return $arrTacpham;
    }
}
