<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of actions
 *
 * @author ngoctv1
 */
class ajaxActions extends sfActions{
    //put your code here
    
    public function executeLoadArticle(sfWebRequest $request){
        
        $type=$request->getParameter('type');
        if ($type==null){$type=1;}
        $keyword = $request->getParameter('keyword');
        $pageIndex = $request->getParameter('pageIndex');
        $pageSize =  10;
        $myPager = new sfDoctrinePager('AdArticle', $pageSize);
        $keyword = trim($keyword);
        $articleId = sfContext::getInstance()->getUser()->getAttribute('article_id');
        if($articleId){
            $myPager->setQuery(AdArticleTable::getSearchArticle($keyword,$articleId));
        }
        else{
            $myPager->setQuery(AdArticleTable::getSearchArticle($keyword));
        }
        $myPager->setPage($this->getRequestParameter('page', $pageIndex));
        $myPager->init();
        $arrayResult = $myPager->getResults(Doctrine::HYDRATE_ARRAY);
        $paging = array("paging" => true, "pageIndex" => $pageIndex, "pageSize" => $pageSize, "maxPage" => $myPager->getLastPage()); //
        array_push($arrayResult, $paging);
        return $this->renderText(json_encode($arrayResult));
    }

    public function executeMove(sfWebRequest $request)
    {
        try {
            $request->checkCSRFProtection();
        } catch (Exception $e) {
            return $this->renderText('csrf');
        }
        $type=$request->getGetParameters('type');
        if($type=='up'){

        }elseif($type=='down'){

        }

        $table = Doctrine_Core::getTable('AdCategory');

        if (
            $table->hasField($field = $request->getParameter('field'))
            && ($record = $table->find($request->getParameter('pk')))
        ) {
            $record->set($field, !$record->get($field));
            $record->save();

            return $this->renderText($record->$field ? '1' : '0');
        } else {
            return $this->renderText('404');
        }
    }


    
    public function executeAjaxLoadCategoryNews(sfWebRequest $request) {
        $listCategoryNews = AdCategoryTable::getCategoryByTypeClone(VtCommonEnum::NewCategory, VtCommonEnum::portalDefault,'');
        return $this->renderText(json_encode($listCategoryNews));
    }
    public function executeAjaxLoadCategoryService(sfWebRequest $request) {
        $listCategoryService = AdCategoryTable::getCategoryByTypeClone(VtCommonEnum::ServiceCategory, VtCommonEnum::portalDefault,'');
        return $this->renderText(json_encode($listCategoryService));
    }
    public function executeAjaxLoadArticleDetail(sfWebRequest $request){
        $listArticle = AdArticleTable::getActiveArticleQuery(VtCommonEnum::portalDefault)->execute();
        $arrResult = array();
        if(count($listArticle)>0){
            foreach($listArticle as $value){
                $arrResult[$value['slug']] = htmlspecialchars($value['title']);
            }
        }
        return $this->renderText(json_encode($arrResult));
    }
    public function executeAjaxLoadServiceDetail(sfWebRequest $request){
        $listService = AdServicesTable::getServiceActiveQuery(VtCommonEnum::portalDefault)->execute();
        $arrResult = array();
        if(count($listService)>0){
            foreach($listService as $value){
                $arrResult[$value['slug']] = htmlspecialchars($value['title']);
            }
        }
        return $this->renderText(json_encode($arrResult));
    }


    public function executeLoadProvince(sfWebRequest $request) {
        $id = $request->getParameter('id');
        $strProvince = "<option selected='selected' value=''>----- Chọn quận/huyện -----</option>";
        if($id){
            $provinces = csdl_areaTable::getProvinceByCityCode($id)->fetchArray();
            if(count($provinces)>0){
                foreach($provinces as $value){
                    $strProvince .= "<option value=".$value['DISTRICT'].">".$value['NAME']."</option>";
                }
            }
        }
        return $this->renderText(json_encode($strProvince));
    }
}


