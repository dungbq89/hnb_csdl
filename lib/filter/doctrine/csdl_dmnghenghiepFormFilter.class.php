<?php

/**
 * csdl_dmnghenghiep filter form.
 *
 * @package    Vt_Portals
 * @subpackage filter
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class csdl_dmnghenghiepFormFilter extends Basecsdl_dmnghenghiepFormFilter
{
  public function configure()
  {
      $this->setWidgets(array(
          'tendanhmuc' => new sfWidgetFormFilterInput(array('with_empty' => false)),
          'gioithieu'  => new sfWidgetFormFilterInput(),
          'anhdaidien' => new sfWidgetFormFilterInput(),
          'thutu'      => new sfWidgetFormFilterInput(),
          'trangthai'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),

      ));

      $this->setValidators(array(
          'tendanhmuc' => new sfValidatorPass(array('required' => false)),
          'gioithieu'  => new sfValidatorPass(array('required' => false)),
          'anhdaidien' => new sfValidatorPass(array('required' => false)),
          'thutu'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
          'trangthai'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),

      ));

      $this->widgetSchema->setNameFormat('csdl_dmnghenghiep_filters[%s]');

      $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
  }
}
