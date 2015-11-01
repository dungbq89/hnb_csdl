<?php

/**
 * csdl_hocvan filter form.
 *
 * @package    Vt_Portals
 * @subpackage filter
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class csdl_hocvanFormFilter extends Basecsdl_hocvanFormFilter
{
  public function configure()
  {
      $this->setWidgets(array(
          'name'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      ));

      $this->setValidators(array(
          'name'       => new sfValidatorPass(array('required' => false)),
      ));
  }
}
