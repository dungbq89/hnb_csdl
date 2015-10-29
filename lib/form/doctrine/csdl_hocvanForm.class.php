<?php

/**
 * csdl_hocvan form.
 *
 * @package    Vt_Portals
 * @subpackage form
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class csdl_hocvanForm extends Basecsdl_hocvanForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['created_at'], $this['updated_at']);
  }
}
