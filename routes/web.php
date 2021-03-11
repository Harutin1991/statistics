<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix'=>'api/v1'], function() use($router){

    $router->get('/school-year', 'SchoolYearController@index');
    $router->post('/school-year', 'SchoolYearController@create');
    $router->get('/school-year/{id}', 'SchoolYearController@show');
    $router->put('/school-year/{id}', 'SchoolYearController@update');
    $router->delete('/school-year/{id}', 'SchoolYearController@destroy');

});
