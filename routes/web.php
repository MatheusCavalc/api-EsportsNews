<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api/v1'], function() use($router){

    $router->get('/reports/list', ['uses' => 'ReportController@index']);
    $router->get('/reports/list/{id}', ['uses' => 'ReportController@show']);

    /*
        $router->post('/reports', ['uses' => 'ReportController@create']);
        $router->delete('reports/{id}', ['uses' => 'ReportController@delete']);
        $router->put('reports/{id}', ['uses' => 'ReportController@update']);
    */
    
    /*
        Recurso: Materias (Report)
        Endpoint: /api/v1/reports/list (cursos)
        GET POST DELETE PUT/PATCH
    */

});
