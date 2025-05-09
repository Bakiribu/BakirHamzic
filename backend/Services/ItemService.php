<?php
require_once 'BaseService.php';
require_once 'ItemDao.php';

class ItemService extends BaseService {
    public function __construct() {
        parent::__construct(new ItemDao());
    }

    public function createItem($data) {
        if (empty($data['name']) || !isset($data['price'])) {
            throw new Exception("Name and price are required.");
        }
        if ($data['price'] <= 0) {
            throw new Exception("Price must be a positive value.");
        }
        return $this->create($data);
    }

    public function getByCategory($category_id) {
        return $this->dao->getByCategory($category_id);
    }
}
