<?php


Flight::route('GET /categories', function() {
    Flight::json(Flight::categoryService()->get_all());
});


Flight::route('GET /categories/@id', function($id) {
    Flight::json(Flight::categoryService()->get_by_id($id));
});


Flight::route('POST /categories', function() {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::categoryService()->create_category($data));
});


Flight::route('PUT /categories/@id', function($id) {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::categoryService()->update($id, $data));
});


Flight::route('DELETE /categories/@id', function($id) {
    Flight::json(Flight::categoryService()->delete($id));
});
?>
