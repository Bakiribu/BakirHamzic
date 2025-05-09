<?php


Flight::route('GET /expenses', function() {
    Flight::json(Flight::expenseService()->get_all());
});


Flight::route('GET /expenses/@id', function($id) {
    Flight::json(Flight::expenseService()->get_by_id($id));
});


Flight::route('POST /expenses', function() {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::expenseService()->add($data));
});


Flight::route('PUT /expenses/@id', function($id) {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::expenseService()->update($id, $data));
});


Flight::route('DELETE /expenses/@id', function($id) {
    Flight::json(Flight::expenseService()->delete($id));
});
?>
