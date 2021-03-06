<?php

require_once dirname(__FILE__).'/../lib/csdlTacphamGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/csdlTacphamGeneratorHelper.class.php';

/**
 * csdlTacpham actions.
 *
 * @package    Vt_Portals
 * @subpackage csdlTacpham
 * @author     ngoctv1
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class csdlTacphamActions extends autoCsdlTacphamActions
{
    protected function getPager()
    {
        $query = $this->buildQuery();
        $pages = ceil($query->count() / $this->getMaxPerPage());
        $pager = $this->configuration->getPager('csdl_tacpham');
        $pager->setQuery($query);
        $pager->setPage(($this->getPage() > $pages) ? $pages : $this->getPage());
        $pager->init();

        return $pager;
    }
}
