<?php

/**
 * csdl_giaithuongTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class csdl_giaithuongTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object csdl_giaithuongTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('csdl_giaithuong');
    }

    public static function getListGiaithuongByHoivien($hoivien_id){
        $q=csdl_giaithuongTable::getInstance()->createQuery()
            ->select('*')
            ->andWhere('hoivien_id = ?', $hoivien_id)
            ->orderby('tengiaithuong asc');

        return $q->execute();
    }
}