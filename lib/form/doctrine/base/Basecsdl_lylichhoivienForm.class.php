<?php

/**
 * csdl_lylichhoivien form base class.
 *
 * @method csdl_lylichhoivien getObject() Returns the current form's model object
 *
 * @package    Vt_Portals
 * @subpackage form
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basecsdl_lylichhoivienForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'hoivien_id'    => new sfWidgetFormInputText(),
      'ten'           => new sfWidgetFormInputText(),
      'hodem'         => new sfWidgetFormInputText(),
      'ngaysinh'      => new sfWidgetFormDateTime(),
      'gioitinh'      => new sfWidgetFormInputText(),
      'diachi'        => new sfWidgetFormInputText(),
      'maquan'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('csdlDistrict'), 'add_empty' => true)),
      'matinh'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('csdlProvince'), 'add_empty' => true)),
      'tieusu'        => new sfWidgetFormTextarea(),
      'nghenghiep_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('csdlNghenghiep'), 'add_empty' => true)),
      'dantoc_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('csdlDantoc'), 'add_empty' => true)),
      'quoctich'      => new sfWidgetFormInputText(),
      'donvi_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('csdlCoquanbaochi'), 'add_empty' => true)),
      'images'        => new sfWidgetFormInputText(),
      'dienthoai'     => new sfWidgetFormInputText(),
      'email'         => new sfWidgetFormInputText(),
      'hocvan'        => new sfWidgetFormInputText(),
      'ngoaingu'      => new sfWidgetFormInputText(),
      'chinhtri'      => new sfWidgetFormInputText(),
      'dangvien'      => new sfWidgetFormInputText(),
      'butdanh'       => new sfWidgetFormInputText(),
      'tacpham_id'    => new sfWidgetFormInputText(),
      'giaithuong_id' => new sfWidgetFormInputText(),
      'thehnbht'      => new sfWidgetFormInputText(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'hoivien_id'    => new sfValidatorInteger(array('required' => false)),
      'ten'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'hodem'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ngaysinh'      => new sfValidatorDateTime(array('required' => false)),
      'gioitinh'      => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'diachi'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'maquan'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('csdlDistrict'), 'required' => false)),
      'matinh'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('csdlProvince'), 'required' => false)),
      'tieusu'        => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'nghenghiep_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('csdlNghenghiep'), 'required' => false)),
      'dantoc_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('csdlDantoc'), 'required' => false)),
      'quoctich'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'donvi_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('csdlCoquanbaochi'), 'required' => false)),
      'images'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'dienthoai'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'hocvan'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ngoaingu'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'chinhtri'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'dangvien'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'butdanh'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'tacpham_id'    => new sfValidatorInteger(array('required' => false)),
      'giaithuong_id' => new sfValidatorInteger(array('required' => false)),
      'thehnbht'      => new sfValidatorPass(array('required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('csdl_lylichhoivien[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'csdl_lylichhoivien';
  }

}
