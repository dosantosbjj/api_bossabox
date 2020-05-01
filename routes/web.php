<?php

/*DESCOMENTAR E ACESSAR A ROTA PARA GERAR UMA KEY
$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/tools/all','ApiController@index');
$router->get('/tools','ApiController@findByTag');
$router->post('/tools/create','ApiController@create');
$router->delete('/tools/delete/{id}','ApiController@destroy');

