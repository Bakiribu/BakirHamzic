<?php


Flight::route('GET /items', function() {
    Flight::json(Flight::itemService()->get_all());
});

Flight::route('GET /items/@id', function($id) {
    Flight::json(Flight::itemService()->get_by_id($id));
});


Flight::route('POST /items', function() {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::itemService()->create_item($data));
});


Flight::route('PUT /items/@id', function($id) {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::itemService()->update($id, $data));
});


Flight::route('DELETE /items/@id', function($id) {
    Flight::json(Flight::itemService()->delete($id));
});
?>
