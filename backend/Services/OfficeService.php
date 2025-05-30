<?php
require_once 'BaseService.php';
require_once 'OfficeDao.php';

class OfficeService extends BaseService {
    public function __construct() {
        parent::__construct(new OfficeDao());
    }

    public function createOffice($data) {
        if (empty($data['name']) || empty($data['location'])) {
            throw new Exception("Name and location are required.");
        }
        return $this->create($data);
    }
}
