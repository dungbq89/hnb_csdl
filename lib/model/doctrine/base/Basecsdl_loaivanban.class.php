<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('csdl_loaivanban', 'doctrine');

/**
 * Basecsdl_loaivanban
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $madanhmuc
 * @property string $tendanhmuc
 * @property string $gioithieu
 * @property string $anhdaidien
 * @property integer $thutu
 * @property boolean $trangthai
 * @property Doctrine_Collection $vanban_phapquy
 * 
 * @method string              getMadanhmuc()      Returns the current record's "madanhmuc" value
 * @method string              getTendanhmuc()     Returns the current record's "tendanhmuc" value
 * @method string              getGioithieu()      Returns the current record's "gioithieu" value
 * @method string              getAnhdaidien()     Returns the current record's "anhdaidien" value
 * @method integer             getThutu()          Returns the current record's "thutu" value
 * @method boolean             getTrangthai()      Returns the current record's "trangthai" value
 * @method Doctrine_Collection getVanbanPhapquy()  Returns the current record's "vanban_phapquy" collection
 * @method csdl_loaivanban     setMadanhmuc()      Sets the current record's "madanhmuc" value
 * @method csdl_loaivanban     setTendanhmuc()     Sets the current record's "tendanhmuc" value
 * @method csdl_loaivanban     setGioithieu()      Sets the current record's "gioithieu" value
 * @method csdl_loaivanban     setAnhdaidien()     Sets the current record's "anhdaidien" value
 * @method csdl_loaivanban     setThutu()          Sets the current record's "thutu" value
 * @method csdl_loaivanban     setTrangthai()      Sets the current record's "trangthai" value
 * @method csdl_loaivanban     setVanbanPhapquy()  Sets the current record's "vanban_phapquy" collection
 * 
 * @package    Vt_Portals
 * @subpackage model
 * @author     ngoctv1
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basecsdl_loaivanban extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('csdl_loaivanban');
        $this->hasColumn('madanhmuc', 'string', 25, array(
             'type' => 'string',
             'comment' => 'Ma danh muc',
             'length' => 25,
             ));
        $this->hasColumn('tendanhmuc', 'string', 255, array(
             'type' => 'string',
             'comment' => 'ten danh muc',
             'length' => 255,
             ));
        $this->hasColumn('gioithieu', 'string', 500, array(
             'type' => 'string',
             'comment' => 'Gioi thieu',
             'length' => 500,
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
        $this->hasMany('csdl_vanbanphapquy as vanban_phapquy', array(
             'local' => 'id',
             'foreign' => 'loaivanban_id'));

        $vtblameable0 = new Doctrine_Template_VtBlameable();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($vtblameable0);
        $this->actAs($timestampable0);
    }
}