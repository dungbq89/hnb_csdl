<?php

/**
 * csdl_lylichhoivien
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Vt_Portals
 * @subpackage model
 * @author     ngoctv1
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class csdl_lylichhoivien extends Basecsdl_lylichhoivien
{
    public function setUp()
    {
        $this->hasMany('csdl_area as csdlProvince', array(
            'local' => 'matinh',
            'foreign' => 'PROVINCE'));
        $this->hasMany('csdl_area as csdlDistrict', array(
            'local' => 'maquan',
            'foreign' => 'DISTRICT'));
        $this->hasMany('csdl_dmnghenghiep as csdlNghenghiep', array(
            'local' => 'nghenghiep_id',
            'foreign' => 'id'));
        $this->hasMany('csdl_dantoc as csdlDantoc', array(
            'local' => 'dantoc_id',
            'foreign' => 'id'));

        $this->hasMany('csdl_coquanbaochi as csdlCoquanbaochi', array(
            'local' => 'donvi_id',
            'foreign' => 'id'));

        $this->hasOne('sfGuardUser as Groups', array(
            'local' => 'hoivien_id',
            'foreign' => 'id'));

        parent::setUp();
    }
}