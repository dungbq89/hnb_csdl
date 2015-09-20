<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 6/14/15
 * Time: 2:01 PM
 */
class pageVanBanActions extends sfActions {
    public function executeDetail(sfWebRequest $request){
        $id = $request->getParameter('id');
        if($id){
            $document = csdl_vanbanphapquyTable::getVanBanDetail($id)->fetchOne();
            if($document){
                $this->document = $document;
            }else{
                return $this->redirect404();
            }
        }
        else{
            return $this->redirect404();
        }
    }
}