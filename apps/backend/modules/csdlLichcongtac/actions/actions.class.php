<?php

require_once dirname(__FILE__).'/../lib/csdlLichcongtacGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/csdlLichcongtacGeneratorHelper.class.php';

/**
 * csdlLichcongtac actions.
 *
 * @package    Vt_Portals
 * @subpackage csdlLichcongtac
 * @author     ngoctv1
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class csdlLichcongtacActions extends autoCsdlLichcongtacActions
{

    protected function getPager()
    {
        $query = $this->buildQuery();
        $query->orderby('start_time desc');
        $pages = ceil($query->count() / $this->getMaxPerPage());
        $pager = $this->configuration->getPager('csdl_lichcongtac');
        $pager->setQuery($query);
        $pager->setPage(($this->getPage() > $pages) ? $pages : $this->getPage());
        $pager->init();

        return $pager;

    }


}
