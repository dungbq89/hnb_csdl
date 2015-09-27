<?php

/**
 * Created by JetBrains PhpStorm.
 * User: ngoctv1
 * Date: 4/24/14
 * Time: 12:02 PM
 * To change this template use File | Settings | File Templates.
 */
class csdlTheHoiVienAdminForm extends Basecsdl_thehoivienForm {

    public function configure() {
        $i18n = sfContext::getInstance()->getI18N();
        unset($this['created_at'], $this['updated_at']);

        $this->widgetSchema['hoivien_id'] = new sfWidgetFormChoice(array(
            'choices' => $this->dsHoivien(),
            'multiple' => false,
            'expanded' => false));
        $this->validatorSchema['hoivien_id'] = new sfValidatorChoice(array(
            'required' => false,
            'choices' => array_keys($this->dsHoivien()),));

        $this->widgetSchema['mathe'] = new sfWidgetFormInputText(array());
        $this->validatorSchema['mathe'] = new sfValidatorString(array('required' => true, 'trim' => true, 'max_length' => 255));

        $this->widgetSchema['anhdaidien'] = new sfWidgetFormInputFileEditable(array(
            'label' => ' ',
            'file_src' => VtHelper::getUrlImagePathThumb(sfConfig::get('app_member_images'), $this->getObject()->getAnhdaidien()),
            'is_image' => true,
            'edit_mode' => !$this->isNew(),
            'template' => '<div>%file%<br />%input%</div>',
        ));

        $this->validatorSchema['anhdaidien'] = new sfValidatorFileViettel(
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

        $this->widgetSchema['ngaycap'] = new sfWidgetFormVnDatePicker(array(),array('readonly'=>true));
        $this->validatorSchema['ngaycap'] = new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d H:i:s'));

        $this->widgetSchema['ngayhethan'] = new sfWidgetFormVnDatePicker(array(),array('readonly'=>true));
        $this->validatorSchema['ngayhethan'] = new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d H:i:s'));

        $this->widgetSchema['nguoiky'] = new sfWidgetFormInputText(array());
        $this->validatorSchema['nguoiky'] = new sfValidatorString(array('required' => true, 'trim' => true, 'max_length' => 255));

        $this->widgetSchema['ngayky'] = new sfWidgetFormVnDatePicker(array(),array('readonly'=>true));
        $this->validatorSchema['ngayky'] = new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d H:i:s'));

        $this->widgetSchema->setNameFormat('csdl_thehoivien[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }

    protected function dsHoivien(){
        $arrHoivien = array(''=>'----- Chọn Hội viên -----');
        $hoivien = csdl_lylichhoivienTable::dsHoivienForThe();

        if(count($hoivien)>0){
            foreach($hoivien as $value){
                $arrHoivien[$value['hoivien_id']] = $value['hodem'] . ' ' .$value['ten'];
            }
        }
        return $arrHoivien;
    }
}
