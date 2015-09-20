<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 6/14/15
 * Time: 2:01 PM
 */
class pageThongTinHoiVienActions extends sfActions {
    public function executeDetail(sfWebRequest $request){
        $id = $this->getUser()->getGuardUser()->getId();
        if($id){
            $user = csdl_lylichhoivienTable::getUserDetail($id)->fetchOne();
            if($user){
                $this->userDetail = $user;
            }
        }
        else{
            return $this->redirect404();
        }
    }
}