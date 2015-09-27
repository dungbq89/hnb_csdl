<?php

require_once dirname(__FILE__).'/../lib/csdlLyLichHoiVienGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/csdlLyLichHoiVienGeneratorHelper.class.php';

/**
 * csdlLyLichHoiVien actions.
 *
 * @package    Vt_Portals
 * @subpackage csdlLyLichHoiVien
 * @author     ngoctv1
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class csdlLyLichHoiVienActions extends autoCsdlLyLichHoiVienActions
{

    protected function getPager()
    {
        $query = $this->buildQuery();
        $query->andWhere('hoivien_id>0');
        $pages = ceil($query->count() / $this->getMaxPerPage());
        $pager = $this->configuration->getPager('csdl_lylichhoivien');
        $pager->setQuery($query);
        $pager->setPage(($this->getPage() > $pages) ? $pages : $this->getPage());
        $pager->init();

        return $pager;
    }
}
