<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 6/14/15
 * Time: 2:01 PM
 */
class pageThongTinHoiVienActions extends sfActions {
    public function executeDetail(sfWebRequest $request){
        if ($this->getUser()->isAuthenticated()){
            $id=$this->getUser()->getGuardUser()->getId();
        }else{
            $id=-1;
        }
        if($id>0){
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
                //giai thuong
                $this->giaithuong=csdl_giaithuongTable::getListGiaithuongByHoivien($id);
                //danh sach tac pham cua hoi vien
                $tacpham = csdl_tacphamTable::getTacphamByHoiVienId($id);
                if(count($tacpham)){
                    $this->listTacpham = $tacpham;
                }
            }
        }
        else{
            return $this->redirect('@homepage');
        }
    }
}