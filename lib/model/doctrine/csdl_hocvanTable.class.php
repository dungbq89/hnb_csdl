<?php

/**
 * csdl_hocvanTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class csdl_hocvanTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object csdl_hocvanTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('csdl_hocvan');
    }


    public static function getListHocvan(){
        $q=csdl_hocvanTable::getInstance()->createQuery()
            ->select('*')
            ->orderby('name asc');
        return $q->execute();
    }
}