<?php


require_once 'BaseDao.php';

class OfficeDao extends BaseDao {
    public function __construct() {
        parent::__construct('offices');
    }
}
?>