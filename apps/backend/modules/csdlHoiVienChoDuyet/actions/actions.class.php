<?php

require_once dirname(__FILE__) . '/../lib/csdlHoiVienChoDuyetGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/csdlHoiVienChoDuyetGeneratorHelper.class.php';

/**
 * csdlHoiVienChoDuyet actions.
 *
 * @package    Vt_Portals
 * @subpackage csdlHoiVienChoDuyet
 * @author     ngoctv1
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class csdlHoiVienChoDuyetActions extends autoCsdlHoiVienChoDuyetActions
{
    protected function getPager()
    {
        $query = $this->buildQuery();
        $query->andWhere('hoivien_id IS NULL');
        $pages = ceil($query->count() / $this->getMaxPerPage());
        $pager = $this->configuration->getPager('csdl_hoivienchoduyet');
        $pager->setQuery($query);
        $pager->setPage(($this->getPage() > $pages) ? $pages : $this->getPage());
        $pager->init();

        return $pager;
    }


    public function executeEdit(sfWebRequest $request)
    {
        $hoivien = $this->getRoute()->getObject();
        if($hoivien){
            $user = sfContext::getInstance()->getUser();
            $user->setAttribute('lylichid',$hoivien);
            $this->redirect(array('sf_route' => 'sf_guard_user_new', ));
        }
        $this->redirect(array('sf_route' => 'csdl_hoivienchoduyet'));
    }
}
