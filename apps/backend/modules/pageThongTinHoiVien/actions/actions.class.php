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
                //Qua trinh cong tac
                $quaTrinh = csdl_quatrinhcongtacTable::getQuaTrinhCongTac($id)->execute();
                if($quaTrinh){
                    $this->quatrinhs = $quaTrinh;
                }
                //the hoi vien
                $thehoivien = csdl_thehoivienTable::getTheHoiVien($id)->execute();
                if($thehoivien){
                    $this->thehoiviens = $thehoivien;
                }
                //danh sach tac pham cua hoi vien
                $tacpham = csdl_tacphamTable::getTacphamByHoiVienId($id);
                if(count($tacpham)){
                    $this->listTacpham = $tacpham;
                }
            }
        }
        else{
            return $this->redirect404();
        }
    }
}