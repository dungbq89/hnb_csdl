<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 6/11/15
 * Time: 11:29 PM
 */

class pagePersonalActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $form =new personalForm();
        $user = sfContext::getInstance()->getUser();
        $this->url_paging = 'personnal';
        $this->page = $request->getParameter('page', 1);
        $limit = 10;
        $query = csdl_lylichhoivienTable::getAllListPerson($limit);
        $pager = new sfDoctrinePager('sfGuardUserHNB', $limit);
        $pager->setQuery($query);
        $pager->setPage($this->page);
        $pager->init();
        $this->pager = $pager;
        $this->listPersonal = $this->pager->getResults();

        if ($request->hasParameter('page') && $user->getAttribute('search', false)) {
            $values = $request->getParameter($form->getName());
            $values['full_name']=$user->getAttribute('full_name');
             $values['phone_number']=$user->getAttribute('phone_number');
             $values['email']=$user->getAttribute('email');
            $form->bind($values);
            $user->setAttribute('search', true);
            $user->setAttribute('full_name', $values['full_name']);
            $user->setAttribute('phone_number', $values['phone_number']);
            $user->setAttribute('email', $values['email']);

            $this->page = $request->getParameter('page', 1);
            $query = csdl_lylichhoivienTable::getListPerson($values['full_name'],$values['phone_number'],$values['email'],$limit);
            $pager = new sfDoctrinePager('sfGuardUserHNB', $limit);
            $pager->setQuery($query);
            $pager->setPage($this->page);
            $pager->init();
            $this->pager = $pager;
            $this->listPersonal = $this->pager->getResults();
        }
        if($request->isMethod('POST')){
            $values = $request->getParameter($form->getName());
            $form->bind($values);
            $user->setAttribute('search', true);
            $user->setAttribute('full_name', $values['full_name']);
            $user->setAttribute('phone_number', $values['phone_number']);
            $user->setAttribute('email', $values['email']);

            $this->page = $request->getParameter('page', 1);
            $query = csdl_lylichhoivienTable::getListPerson($values['full_name'],$values['phone_number'],$values['email'],$limit);
            $pager = new sfDoctrinePager('sfGuardUserHNB', $limit);
            $pager->setQuery($query);
            $pager->setPage($this->page);
            $pager->init();
            $this->pager = $pager;
            $this->listPersonal = $this->pager->getResults();
        }
        $this->form=$form;
    }

    public function executeDetail(sfWebRequest $request) {
        $id = $request->getParameter('id');
        if($id){
            $person = csdl_lylichhoivienTable::getPersonById($id)->fetchOne();
            if($person){
                $this->personal = $person;
                $hoivienId = $person->hoivien_id;
                if($hoivienId>0){
                    $user = csdl_lylichhoivienTable::getUserDetail($hoivienId)->fetchOne();

                    if($user){
                        $this->userDetail = $user;
                        //Qua trinh cong tac
                        $quaTrinh = csdl_quatrinhcongtacTable::getQuaTrinhCongTac($hoivienId)->execute();
                        if($quaTrinh){
                            $this->quatrinhs = $quaTrinh;
                        }
                        //the hoi vien
                        $thehoivien = csdl_thehoivienTable::getTheHoiVien($hoivienId)->execute();
                        if($thehoivien){
                            $this->thehoiviens = $thehoivien;
                        }
                        //giai thuong
                        $this->giaithuong=csdl_giaithuongTable::getListGiaithuongByHoivien($hoivienId);
                        //danh sach tac pham cua hoi vien
                        $tacpham = csdl_tacphamTable::getTacphamByHoiVienId($hoivienId);
                        if(count($tacpham)){
                            $this->listTacpham = $tacpham;
                        }
                    }
                }


            }
            else{
                $this->redirect404();
            }
        }else{
            $this->redirect404();
        }
    }
}