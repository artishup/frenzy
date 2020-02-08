<?php

/*
|--------------------------------------------------------------------------
| Shared Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['namespace' => 'ArtishUp\Frenzy\Mail\Presentation\Http\Controllers'], function() use ($router) {
    $router->post('order', 'OrderController@order');
});


