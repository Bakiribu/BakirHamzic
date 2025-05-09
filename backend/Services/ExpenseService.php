<?php
require_once 'BaseService.php';
require_once 'ExpenseDao.php';

class ExpenseService extends BaseService {
    public function __construct() {
        parent::__construct(new ExpenseDao());
    }

    public function createExpense($data) {
        if (!isset($data['amount']) || $data['amount'] < 0) {
            throw new Exception("Amount must be a non-negative number.");
        }
        if (empty($data['description'])) {
            throw new Exception("Description is required.");
        }
        return $this->create($data);
    }

    public function getByEmployee($employee_id) {
        return $this->dao->getByEmployee($employee_id);
    }
}
