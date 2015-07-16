<?php

/**
 * sfGuardUserTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class sfGuardUserTable extends PluginsfGuardUserTable {

    /**
     * Returns an instance of this class.
     *
     * @return object sfGuardUserTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('sfGuardUser');
    }
    public function getUserByUsername($username, $is_active = 1) {
        $q = $this->createQuery()
                ->where('username = ?', $username)
                ->addWhere('is_active = ?', $is_active);

        return $q->fetchOne();
    }
    public static function getUserName($userId){
        $q=sfGuardUserTable::getInstance()->createQuery()
                ->select('username, first_name, last_name')
                ->where('id=?',$userId);
        return $q->fetchOne();
    }

    public function getSortUsernameAscList(Doctrine_Query $q)
    {
        return $q->orderBy('username');
    }
    
    public function setIsActive($ids, $status) {
        $q = $this->createQuery()
                ->update()
                ->set('is_active', '?', $status)
                ->set('updated_at', '?', date('Y-m-d H:i:s', strtotime('now')))
                ->whereIn('id', $ids);

        return $q->execute();
    }

    public function setUnLockUser($username) {
        $q = $this->createQuery()
                ->update('sfGuardUser u')
                ->set('u.is_lock_signin', '?', 0)
                ->set('u.locked_time', 'NULL')
                ->where('u.username = ?', $username);

        return $q->execute();
    }

    public function updateUserLog($username, $time) {
        $q = $this->createQuery()
                ->update()
                ->set('is_lock_signin', '?', 1)
                ->set('locked_time', '?', $time)
                ->where('username = ?', $username);

        return $q->execute();
    }

    /**
     * Khoa nguoi dung
     * @author loilv4
     * @created on 04/05/2013
     * @param $ids
     */
    public static function deactive($ids) {
        $query = Doctrine_Core::getTable('sfGuardUser')->createQuery('q')
                ->update()
                ->set('q.is_active', 0)
                ->set('updated_at', '?', date('Y-m-d H:i:s', strtotime('now')))
                ->andWhereIn('q.id', $ids)
                ->andWhere('q.is_active = ?', 1);
        return $query->execute();
    }

    /**
     * Mo khoa nguoi dung
     * @author loilv4
     * @created on 04/05/2013
     * @param $ids
     */
    public static function active($ids) {
        $query = Doctrine_Core::getTable('sfGuardUser')->createQuery('q')
                ->update()
                ->set('q.is_active', 1)
                ->set('updated_at', '?', date('Y-m-d H:i:s', strtotime('now')))
                ->andWhereIn('q.id', $ids)
                ->andWhere('q.is_active = ?', 0);
        return $query->execute();
    }

    public function retrieveByUsername($username, $isActive = true) {
        $query = Doctrine_Core::getTable('sfGuardUser')->createQuery('u')
                ->where('u.username = ?', $username)
                ->addWhere('u.is_active = ?', $isActive)
        ;

        return $query->fetchOne();
    }

    /**
     * Retrieves a sfGuardUser object by username or email_address and is_active flag.
     *
     * @param  string  $username The username
     * @param  boolean $isActive The user's status
     *
     * @return sfGuardUser
     */
    public function retrieveByUsernameOrEmailAddress($username, $isActive = true) {
        $query = Doctrine_Core::getTable('sfGuardUser')->createQuery('u')
                ->where('u.username = ? OR u.email_address = ?', array($username, $username))
                ->addWhere('u.is_active = ?', $isActive)
        ;

        return $query->fetchOne();
    }
    
    public static function getListUserActive(){
        return sfGuardUserTable::getInstance()->createQuery()
                ->select('username, id')
                ->where('is_active =?', VtCommonEnum::NUMBER_ONE)
                ->orderBy('username ASC')
                ->fetchArray();
    }
    public function getAllForSelectionQuery() {
        return $this->createQuery('a')
            ->select('id, username')
            ->where('is_active =?', VtCommonEnum::NUMBER_ONE)
            ->orderBy('id asc');
    }
    public static function queryListUserActive(){
        return sfGuardUserTable::getInstance()->createQuery()
                ->select('username, id')
                ->where('is_active =?', VtCommonEnum::NUMBER_ONE)
                ->orderBy('username ASC');
    }

}