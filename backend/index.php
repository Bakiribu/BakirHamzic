<?php

require_once 'dao/CategoryDao.php';
require_once 'dao/OfficeDao.php';
require_once 'dao/EmployeeDao.php';
require_once 'dao/ItemDao.php';
require_once 'dao/ExpenseDao.php';


$categoryDao = new CategoryDao();

$newCategoryId = $categoryDao->insert([
    'name' => 'Office Supplies',
    'description' => 'Expenses for office consumables'
]);
echo "New Category ID: " . $newCategoryId . "<br>";

$categories = $categoryDao->getAll();
echo "Categories:<br>";
print_r($categories);

$officeDao = new OfficeDao();
$newOfficeId = $officeDao->insert([
    'name' => 'Headquarters',
    'location' => '123 ulica, Sarajevo'
]);
echo "New Office ID: " . $newOfficeId . "<br>";

$office = $officeDao->getById($newOfficeId);
echo "Office Details:<br>";
print_r($office);


$employeeDao = new EmployeeDao();
$newEmployeeId = $employeeDao->insert([
    'office_id' => $newOfficeId,
    'first_name' => 'Amar',
    'last_name' => 'Amar',
    'email' => 'amar.amar@example.com',
    'hire_date' => '2025-01-15'
]);
echo "New Employee ID: " . $newEmployeeId . "<br>";

$employee = $employeeDao->getById($newEmployeeId);
echo "Employee Details:<br>";
print_r($employee);


$itemDao = new ItemDao();
$newItemId = $itemDao->insert([
    'category_id' => $newCategoryId,
    'office_id' => $newOfficeId,
    'name' => 'Printer Paper',
    'description' => 'A4 size, 500 sheets pack',
    'unit_price' => 15.50
]);
echo "New Item ID: " . $newItemId . "<br>";


$item = $itemDao->getById($newItemId);
echo "Item Details:<br>";
print_r($item);


$expenseDao = new ExpenseDao();

$newExpenseId = $expenseDao->insert([
    'employee_id' => $newEmployeeId,
    'category_id' => $newCategoryId,
    'item_id' => $newItemId, 
    'expense_date' => '2025-03-27',
    'amount' => 15.50,
    'description' => 'Purchased printer paper for office use'
]);
echo "New Expense ID: " . $newExpenseId . "<br>";


$expense = $expenseDao->getById($newExpenseId);
echo "Expense Details:<br>";
print_r($expense);
?>


