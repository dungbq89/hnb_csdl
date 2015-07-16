<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('csdl_tailieunghiepvu', 'doctrine');

/**
 * Basecsdl_tailieunghiepvu
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $matailieu
 * @property string $kyhieu
 * @property string $sotailieu
 * @property string $tentailieu
 * @property string $trichdan
 * @property string $anhdaidien
 * @property string $filedownload
 * @property integer $trangthai
 * 
 * @method string               getMatailieu()    Returns the current record's "matailieu" value
 * @method string               getKyhieu()       Returns the current record's "kyhieu" value
 * @method string               getSotailieu()    Returns the current record's "sotailieu" value
 * @method string               getTentailieu()   Returns the current record's "tentailieu" value
 * @method string               getTrichdan()     Returns the current record's "trichdan" value
 * @method string               getAnhdaidien()   Returns the current record's "anhdaidien" value
 * @method string               getFiledownload() Returns the current record's "filedownload" value
 * @method integer              getTrangthai()    Returns the current record's "trangthai" value
 * @method csdl_tailieunghiepvu setMatailieu()    Sets the current record's "matailieu" value
 * @method csdl_tailieunghiepvu setKyhieu()       Sets the current record's "kyhieu" value
 * @method csdl_tailieunghiepvu setSotailieu()    Sets the current record's "sotailieu" value
 * @method csdl_tailieunghiepvu setTentailieu()   Sets the current record's "tentailieu" value
 * @method csdl_tailieunghiepvu setTrichdan()     Sets the current record's "trichdan" value
 * @method csdl_tailieunghiepvu setAnhdaidien()   Sets the current record's "anhdaidien" value
 * @method csdl_tailieunghiepvu setFiledownload() Sets the current record's "filedownload" value
 * @method csdl_tailieunghiepvu setTrangthai()    Sets the current record's "trangthai" value
 * 
 * @package    Vt_Portals
 * @subpackage model
 * @author     ngoctv1
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basecsdl_tailieunghiepvu extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('csdl_tailieu_nghiepvu');
        $this->hasColumn('matailieu', 'string', 25, array(
             'type' => 'string',
             'comment' => 'Ma tai lieu',
             'length' => 25,
             ));
        $this->hasColumn('kyhieu', 'string', 25, array(
             'type' => 'string',
             'comment' => 'Ky hieu',
             'length' => 25,
             ));
        $this->hasColumn('sotailieu', 'string', 25, array(
             'type' => 'string',
             'comment' => 'so tai lieu',
             'length' => 25,
             ));
        $this->hasColumn('tentailieu', 'string', 255, array(
             'type' => 'string',
             'comment' => 'Ten tai lieu',
             'length' => 255,
             ));
        $this->hasColumn('trichdan', 'string', 1000, array(
             'type' => 'string',
             'comment' => 'Trich dan',
             'length' => 1000,
             ));
        $this->hasColumn('anhdaidien', 'string', 255, array(
             'type' => 'string',
             'comment' => 'hinh anh',
             'length' => 255,
             ));
        $this->hasColumn('filedownload', 'string', 255, array(
             'type' => 'string',
             'comment' => 'file download',
             'length' => 255,
             ));
        $this->hasColumn('trangthai', 'integer', 5, array(
             'type' => 'integer',
             'comment' => 'trang thai',
             'length' => 5,
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