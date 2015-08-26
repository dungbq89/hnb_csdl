<?php

/**
 * Created by JetBrains PhpStorm.
 * User: ngoctv1
 * Date: 4/24/14
 * Time: 12:02 PM
 * To change this template use File | Settings | File Templates.
 */
class csdlCoQuanBanHanhAdminForm extends Basecsdl_coquanbanhanhForm {

    public function configure() {
        $i18n = sfContext::getInstance()->getI18N();
        unset($this['created_at'], $this['updated_at'], $this['created_at'], $this['updated_at']);
        $this->widgetSchema['tendonvi'] = new sfWidgetFormInputText(array());
        $this->validatorSchema['tendonvi'] = new sfValidatorString(array('required' => true, 'trim' => true, 'max_length' => 255));

        $this->widgetSchema['madonvi'] = new sfWidgetFormInputText(array());
        $this->validatorSchema['madonvi'] = new sfValidatorString(array('required' => false, 'trim' => true, 'max_length' => 255));

        $this->widgetSchema['gioithieu'] = new sfWidgetFormTextarea(array());
        $this->validatorSchema['gioithieu'] = new sfValidatorString(array('required' => false, 'trim' => true, 'max_length' => 500));

        $this->widgetSchema['nguoidaidien'] = new sfWidgetFormInputText(array());
        $this->validatorSchema['nguoidaidien'] = new sfValidatorString(array('required' => false, 'trim' => true, 'max_length' => 255));

        $this->widgetSchema['anhdaidien'] = new sfWidgetFormInputFileEditable(array(
            'label' => ' ',
            'file_src' => VtHelper::getUrlImagePathThumb(sfConfig::get('app_member_images'), $this->getObject()->getAnhdaidien()),
            'is_image' => true,
            'edit_mode' => !$this->isNew(),
            'template' => '<div>%file%<br />%input%</div>',
        ));

        $this->widgetSchema['thutu'] = new sfWidgetFormInputText(array('default' => 0), array('size' => 5, 'maxlength' => 5));
        $this->validatorSchema['thutu'] = new sfValidatorInteger(array('required' => false, "min"=>0, 'max'=>99999, 'trim' => true),array('min'=>$i18n->__('Thứ tự phải là số nguyên dương'),'max'=>$i18n->__('Tối đa 5 ký tự'),'invalid'=> $i18n->__('Thứ tự phải là số nguyên dương')));
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



        $this->widgetSchema->setNameFormat('csdl_coquanbanhanh[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }

}
