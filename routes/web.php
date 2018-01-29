<?php

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
$app->get('/', ['uses' => 'QuoteController@random']);
$app->get('/quote/{id}', ['uses' => 'QuoteController@quoteById']);
$app->get('/{character}', ['uses' => 'QuoteController@quoteByCharacter']);


/*
|--------------------------------------------------------------------------
| RESTful API v1 routes
|--------------------------------------------------------------------------
|
| Here is define RESTful API v1. Note, that API is immutable.
*/
$app->group(['prefix' => 'api/v1'], function () use ($app) {
    $app->get('/', ['uses' => 'QuoteApiV1Controller@version']);
    $app->get('random', ['uses' => 'QuoteApiV1Controller@random']);
});

