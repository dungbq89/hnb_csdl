<?php

require_once dirname(__FILE__).'/../lib/csdlNhatkyGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/csdlNhatkyGeneratorHelper.class.php';

/**
 * csdlNhatky actions.
 *
 * @package    Vt_Portals
 * @subpackage csdlNhatky
 * @author     ngoctv1
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class csdlNhatkyActions extends autoCsdlNhatkyActions
{

    protected function getPager()
    {
        $query = $this->buildQuery();
        $query->orderby('ngaytao desc');
        $pages = ceil($query->count() / $this->getMaxPerPage());
        $pager = $this->configuration->getPager('csdl_nhatky');
        $pager->setQuery($query);
        $pager->setPage(($this->getPage() > $pages) ? $pages : $this->getPage());
        $pager->init();

        return $pager;
    }
}
