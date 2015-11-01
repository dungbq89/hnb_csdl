<?php

/**
 * csdl_lylichhoivienTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class csdl_lylichhoivienTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object csdl_lylichhoivienTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('csdl_lylichhoivien');
    }

    public static function getNewUser($limit)
    {
        return csdl_lylichhoivienTable::getInstance()->createQuery()
            ->where('hoivien_id>0')
            ->orderBy('updated_at desc')
            ->limit($limit);
    }

    public static function getUserDetail($hoiVienId)
    {
        return csdl_lylichhoivienTable::getInstance()->createQuery()
            ->where('hoivien_id =?',$hoiVienId);
    }

    public static function dsHoivienForThe(){
    return csdl_lylichhoivienTable::getInstance()->createQuery()
        ->select('hoivien_id, hodem ,ten ')
        ->where('hoivien_id>0')
        ->orderBy('ten asc')
        ->fetchArray();
}

    public static function hotenHoivien($hoivienId){
        $result= csdl_lylichhoivienTable::getInstance()->createQuery()
            ->select('hodem, ten')
            ->where('hoivien_id=?',$hoivienId)
            ->fetchArray();
        if(count($result)>0){
            return $result[0]['hodem'];
        }
        return '';
    }

    //lay danh sach hoi vien active

    //frontend
    public static function getListPerson($full_name, $phone_number,$email,$limit)
    {
        $query = csdl_lylichhoivienTable::getInstance()->createQuery('s')
            ->select('s.*, c.phone as phone, c.email_address as email_address')
            ->innerJoin('s.Groups c')
//            ->where('s.id = c.hoivien_id')
            ->orderBy('s.ten asc')
            ->limit($limit);

        if($full_name!=""){
//            $query->andWhere("CONCAT(s.hodem, s.ten) LIKE ?", array("%" . trim($full_name) . "%"));
            $query->andWhere("s.hodem LIKE ?", array("%" . trim($full_name) . "%"));
        }
        if($phone_number!=""){
            $query->andWhere('c.phone LIKE ?',"%" . trim($phone_number). "%");
        }
        if($email!=""){
            $query->andWhere('c.email_address LIKE ?',"%" . trim($email). "%");
        }
        return $query;
    }

    public static function getPersonById($id){
        $query = csdl_lylichhoivienTable::getInstance()->createQuery('s')
            ->select('s.ten, s.hodem, c.phone as phone, c.email_address as email_address, s.diachi, s.images')
            ->innerJoin('s.Groups c')
            ->where('s.id=?',$id);
        return $query;
    }

    public static function getAllListPerson($limit)
    {
        $query = csdl_lylichhoivienTable::getInstance()->createQuery('s')
            ->select('s.ten, s.hodem, c.phone as phone, c.email_address as email_address, s.diachi, s.images')
            ->innerJoin('s.Groups c')
            ->orderBy('s.ten asc')
            ->limit($limit);
        return $query;
    }

}