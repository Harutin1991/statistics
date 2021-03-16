<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix'=>'api/v1'], function() use($router){

    $router->get('/get-budget-balane/{schoolId}', 'StatisticsController@getBudgetBalance');
    $router->get('/get-all-funds/{allocationType}/{schoolId}', 'StatisticsController@getBudgetBalance');

});
