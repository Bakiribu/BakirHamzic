<?php


require_once 'BaseDao.php';

class ItemDao extends BaseDao {
    public function __construct() {
        parent::__construct('items');
    }
}
?>

