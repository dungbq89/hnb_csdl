<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('csdl_coquanbanhanh', 'doctrine');

/**
 * Basecsdl_coquanbanhanh
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $madonvi
 * @property string $tendonvi
 * @property string $gioithieu
 * @property string $nguoidaidien
 * @property string $anhdaidien
 * @property integer $thutu
 * @property boolean $trangthai
 * 
 * @method string             getMadonvi()      Returns the current record's "madonvi" value
 * @method string             getTendonvi()     Returns the current record's "tendonvi" value
 * @method string             getGioithieu()    Returns the current record's "gioithieu" value
 * @method string             getNguoidaidien() Returns the current record's "nguoidaidien" value
 * @method string             getAnhdaidien()   Returns the current record's "anhdaidien" value
 * @method integer            getThutu()        Returns the current record's "thutu" value
 * @method boolean            getTrangthai()    Returns the current record's "trangthai" value
 * @method csdl_coquanbanhanh setMadonvi()      Sets the current record's "madonvi" value
 * @method csdl_coquanbanhanh setTendonvi()     Sets the current record's "tendonvi" value
 * @method csdl_coquanbanhanh setGioithieu()    Sets the current record's "gioithieu" value
 * @method csdl_coquanbanhanh setNguoidaidien() Sets the current record's "nguoidaidien" value
 * @method csdl_coquanbanhanh setAnhdaidien()   Sets the current record's "anhdaidien" value
 * @method csdl_coquanbanhanh setThutu()        Sets the current record's "thutu" value
 * @method csdl_coquanbanhanh setTrangthai()    Sets the current record's "trangthai" value
 * 
 * @package    Vt_Portals
 * @subpackage model
 * @author     ngoctv1
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basecsdl_coquanbanhanh extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('csdl_coquan_banhanh');
        $this->hasColumn('madonvi', 'string', 25, array(
             'type' => 'string',
             'comment' => 'Ma don vi',
             'length' => 25,
             ));
        $this->hasColumn('tendonvi', 'string', 255, array(
             'type' => 'string',
             'comment' => 'ten don vi',
             'length' => 255,
             ));
        $this->hasColumn('gioithieu', 'string', 500, array(
             'type' => 'string',
             'comment' => 'Gioi thieu',
             'length' => 500,
             ));
        $this->hasColumn('nguoidaidien', 'string', 255, array(
             'type' => 'string',
             'comment' => 'nguoi dai dien',
             'length' => 255,
             ));
        $this->hasColumn('anhdaidien', 'string', 255, array(
             'type' => 'string',
             'comment' => 'hinh anh',
             'length' => 255,
             ));
        $this->hasColumn('thutu', 'integer', 5, array(
             'type' => 'integer',
             'comment' => 'Thu tu hien thi',
             'length' => 5,
             ));
        $this->hasColumn('trangthai', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => false,
             'comment' => 'Trang thai',
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