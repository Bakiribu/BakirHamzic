<?php
require_once 'BaseService.php';
require_once 'CategoryDao.php';

class CategoryService extends BaseService {
    public function __construct() {
        parent::__construct(new CategoryDao());
    }

    public function createCategory($data) {
        if (empty($data['name'])) {
            throw new Exception("Category name is required.");
        }
        return $this->create($data);
    }
}
