<?php

/**
 * pageTacpham actions.
 *
 * @package    Vt_Portals
 * @subpackage pageTacpham
 * @author     ngoctv1
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pageTacphamActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {

  }

    public function executeDetail(sfWebRequest $request){
        $id = $request->getParameter('id');
        if($id){
            $tacpham = csdl_tacphamTable::getTacphamById($id);
            if($tacpham){
                $this->tacpham = $tacpham;
            }else{
                return $this->redirect404();
            }
        }
        else{
            return $this->redirect404();
        }
    }
}
