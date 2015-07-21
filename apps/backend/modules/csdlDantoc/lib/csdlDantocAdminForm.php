<?php

/**
 * Created by JetBrains PhpStorm.
 * User: ngoctv1
 * Date: 4/24/14
 * Time: 12:02 PM
 * To change this template use File | Settings | File Templates.
 */
class csdlDantocAdminForm extends Basecsdl_dantocForm {

    public function configure() {
        $i18n = sfContext::getInstance()->getI18N();
        unset($this['created_at'], $this['updated_at'], $this['created_at'], $this['updated_at']);
        $this->widgetSchema['tendantoc'] = new sfWidgetFormInputText(array());
        $this->validatorSchema['tendantoc'] = new sfValidatorString(array('required' => true, 'trim' => true, 'max_length' => 255));


        $this->widgetSchema['madantoc'] = new sfWidgetFormInputText(array());
        $this->validatorSchema['madantoc'] = new sfValidatorString(array('required' => true, 'trim' => true, 'max_length' => 255));


        $this->widgetSchema['gioithieu'] = new sfWidgetFormTextarea(array());
        $this->validatorSchema['gioithieu'] = new sfValidatorString(array('required' => false, 'trim' => true, 'max_length' => 500));

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



        $this->widgetSchema->setNameFormat('csdl_dantoc[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }

}
