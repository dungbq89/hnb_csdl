<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('csdl_tacgia', 'doctrine');

/**
 * Basecsdl_tacgia
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $hoten
 * @property timestamp $ngaysinh
 * @property string $gioitinh
 * @property string $diachi
 * @property string $dienthoai
 * @property string $email
 * @property string $donvi
 * 
 * @method string      getHoten()     Returns the current record's "hoten" value
 * @method timestamp   getNgaysinh()  Returns the current record's "ngaysinh" value
 * @method string      getGioitinh()  Returns the current record's "gioitinh" value
 * @method string      getDiachi()    Returns the current record's "diachi" value
 * @method string      getDienthoai() Returns the current record's "dienthoai" value
 * @method string      getEmail()     Returns the current record's "email" value
 * @method string      getDonvi()     Returns the current record's "donvi" value
 * @method csdl_tacgia setHoten()     Sets the current record's "hoten" value
 * @method csdl_tacgia setNgaysinh()  Sets the current record's "ngaysinh" value
 * @method csdl_tacgia setGioitinh()  Sets the current record's "gioitinh" value
 * @method csdl_tacgia setDiachi()    Sets the current record's "diachi" value
 * @method csdl_tacgia setDienthoai() Sets the current record's "dienthoai" value
 * @method csdl_tacgia setEmail()     Sets the current record's "email" value
 * @method csdl_tacgia setDonvi()     Sets the current record's "donvi" value
 * 
 * @package    Vt_Portals
 * @subpackage model
 * @author     ngoctv1
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basecsdl_tacgia extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('csdl_tacgia');
        $this->hasColumn('hoten', 'string', 255, array(
             'type' => 'string',
             'comment' => 'Họ và tên',
             'length' => 255,
             ));
        $this->hasColumn('ngaysinh', 'timestamp', 25, array(
             'type' => 'timestamp',
             'comment' => 'ngay sinh',
             'length' => 25,
             ));
        $this->hasColumn('gioitinh', 'string', 25, array(
             'type' => 'string',
             'comment' => 'Gioi tinh',
             'length' => 25,
             ));
        $this->hasColumn('diachi', 'string', 255, array(
             'type' => 'string',
             'comment' => 'dịa chỉ',
             'length' => 255,
             ));
        $this->hasColumn('dienthoai', 'string', 255, array(
             'type' => 'string',
             'comment' => 'Dien thoai',
             'length' => 255,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'comment' => 'Email',
             'length' => 255,
             ));
        $this->hasColumn('donvi', 'string', 255, array(
             'type' => 'string',
             'comment' => 'don vi cong tac',
             'length' => 255,
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