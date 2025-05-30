<?php


Flight::route('GET /offices', function() {
    Flight::json(Flight::officeService()->get_all());
});


Flight::route('GET /offices/@id', function($id) {
    Flight::json(Flight::officeService()->get_by_id($id));
});


Flight::route('POST /offices', function() {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::officeService()->create_office($data));
});


Flight::route('PUT /offices/@id', function($id) {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::officeService()->update($id, $data));
});


Flight::route('DELETE /offices/@id', function($id) {
    Flight::json(Flight::officeService()->delete($id));
});
?>
