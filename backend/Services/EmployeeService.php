<?php
require_once 'BaseService.php';
require_once 'EmployeeDao.php';

class EmployeeService extends BaseService {
    public function __construct() {
        parent::__construct(new EmployeeDao());
    }

    public function createEmployee($data) {
        if (empty($data['name'])) {
            throw new Exception("Name is required.");
        }
        if (!is_numeric($data['salary']) || $data['salary'] < 0) {
            throw new Exception("Salary must be a non-negative number.");
        }
        return $this->create($data);
    }

    public function getByOffice($office_id) {
        return $this->dao->getByOffice($office_id);
    }
}
