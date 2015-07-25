<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('csdl_giaithuong', 'doctrine');

/**
 * Basecsdl_giaithuong
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $tengiaithuong
 * @property string $madanhmuc
 * @property integer $namtochuc
 * @property integer $giatri
 * 
 * @method string          getTengiaithuong() Returns the current record's "tengiaithuong" value
 * @method string          getMadanhmuc()     Returns the current record's "madanhmuc" value
 * @method integer         getNamtochuc()     Returns the current record's "namtochuc" value
 * @method integer         getGiatri()        Returns the current record's "giatri" value
 * @method csdl_giaithuong setTengiaithuong() Sets the current record's "tengiaithuong" value
 * @method csdl_giaithuong setMadanhmuc()     Sets the current record's "madanhmuc" value
 * @method csdl_giaithuong setNamtochuc()     Sets the current record's "namtochuc" value
 * @method csdl_giaithuong setGiatri()        Sets the current record's "giatri" value
 * 
 * @package    Vt_Portals
 * @subpackage model
 * @author     ngoctv1
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basecsdl_giaithuong extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('csdl_giaithuong');
        $this->hasColumn('tengiaithuong', 'string', 255, array(
             'type' => 'string',
             'comment' => 'Ten giai thuong: nhat, nhi, ba',
             'length' => 255,
             ));
        $this->hasColumn('madanhmuc', 'string', 25, array(
             'type' => 'string',
             'comment' => 'Ma danh muc giai thuong',
             'length' => 25,
             ));
        $this->hasColumn('namtochuc', 'integer', 4, array(
             'type' => 'integer',
             'comment' => 'Nam to chuc',
             'length' => 4,
             ));
        $this->hasColumn('giatri', 'integer', 8, array(
             'type' => 'integer',
             'comment' => 'gia tri giai thuong',
             'length' => 8,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $vtblameable0 = new Doctrine_Template_VtBlameable();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($vtblameable0);
        $this->actAs($timestampable0);
    }
}