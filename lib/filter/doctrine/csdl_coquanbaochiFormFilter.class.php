<?php

/**
 * csdl_coquanbaochi filter form.
 *
 * @package    Vt_Portals
 * @subpackage filter
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class csdl_coquanbaochiFormFilter extends Basecsdl_coquanbaochiFormFilter
{
  public function configure()
  {
      $this->setWidgets(array(
          'madonvi'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
          'tendonvi'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
          'gioithieu'    => new sfWidgetFormFilterInput(),
          'nguoidaidien' => new sfWidgetFormFilterInput(array('with_empty' => false)),
          'anhdaidien'   => new sfWidgetFormFilterInput(),
          'thutu'        => new sfWidgetFormFilterInput(),
          'trangthai'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),

      ));

      $this->setValidators(array(
          'madonvi'      => new sfValidatorPass(array('required' => false)),
          'tendonvi'     => new sfValidatorPass(array('required' => false)),
          'gioithieu'    => new sfValidatorPass(array('required' => false)),
          'nguoidaidien' => new sfValidatorPass(array('required' => false)),
          'anhdaidien'   => new sfValidatorPass(array('required' => false)),
          'thutu'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
          'trangthai'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),

      ));

      $this->widgetSchema->setNameFormat('csdl_coquanbaochi_filters[%s]');

      $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
  }
}
