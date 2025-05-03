<?php


Flight::route('GET /employees', function() {
    Flight::json(Flight::employeeService()->get_all());
});


Flight::route('GET /employees/@id', function($id) {
    Flight::json(Flight::employeeService()->get_by_id($id));
});


Flight::route('POST /employees', function() {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::employeeService()->create_employee($data));
});


Flight::route('PUT /employees/@id', function($id) {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::employeeService()->update($id, $data));
});

Flight::route('DELETE /employees/@id', function($id) {
    Flight::json(Flight::employeeService()->delete($id));
});
?>
