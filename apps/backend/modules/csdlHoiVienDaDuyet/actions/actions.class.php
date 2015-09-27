<?php

require_once dirname(__FILE__) . '/../lib/csdlHoiVienDaDuyetGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/csdlHoiVienDaDuyetGeneratorHelper.class.php';

/**
 * csdlHoiVienDaDuyet actions.
 *
 * @package    Vt_Portals
 * @subpackage csdlHoiVienDaDuyet
 * @author     ngoctv1
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class csdlHoiVienDaDuyetActions extends autoCsdlHoiVienDaDuyetActions
{
    protected function getPager()
    {
        $query = $this->buildQuery();
        $pages = ceil($query->count() / $this->getMaxPerPage());
        $pager = $this->configuration->getPager('csdl_lylichhoivien');
        $query->where('hoivien_id IS NOT NULL');
        $pager->setQuery($query);
        $pager->setPage(($this->getPage() > $pages) ? $pages : $this->getPage());
        $pager->init();

        return $pager;
    }
}
