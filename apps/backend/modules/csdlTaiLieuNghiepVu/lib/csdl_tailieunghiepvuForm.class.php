<?php

/**
 * csdl_tailieunghiepvu form.
 *
 * @package    Vt_Portals
 * @subpackage form
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class csdl_tailieunghiepvuForm extends Basecsdl_tailieunghiepvuForm
{
  public function configure()
  {
      die('12');
      unset($this['created_by'],$this['updated_by'],$this['created_at'],$this['updated_at'],$this['hoivien_id']);
  }
}
