<?php

/**
 * Created by JetBrains PhpStorm.
 * User: ngoctv1
 * Date: 5/6/14
 * Time: 6:08 PM
 * To change this template use File | Settings | File Templates.
 */
class commonComponents extends sfComponents
{

    public function executeNewUser($request) {
        $listUser = csdl_lylichhoivienTable::getNewUser(5)->fetchArray();
        if($listUser){
            $this->listUser = $listUser;
        }else{
            return sfView::NONE;
        }
    }

    public function executeVanBan($request) {
        $listVanBan = csdl_vanbanphapquyTable::getVanBan(5)->fetchArray();
        if($listVanBan){
            $this->listVanBan = $listVanBan;
        }else{
            return sfView::NONE;
        }
    }

    public function executeTaiLieu($request) {
        $listTaiLieu = csdl_tailieunghiepvuTable::getTaiLieu(5)->fetchArray();
        if($listTaiLieu){
            $this->listTaiLieu = $listTaiLieu;
        }else{
            return sfView::NONE;
        }
    }
}
