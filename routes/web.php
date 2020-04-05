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

$router->post('/details','CrudController@Create');
$router->get('/details','CrudController@Read');
$router->put('/details','CrudController@Update');
$router->delete('/details','CrudController@Delete');

$router->get('/functions','FunctionsController@functions');

$router->post('/quiry','QuiryBuilderCrudController@insert');
$router->put('/quiry','QuiryBuilderCrudController@update');
$router->delete('/quiry','QuiryBuilderCrudController@delete');

$router->get('/eorm','EORMController@selectAll');
$router->get('/eorm','EORMController@selectById');
$router->post('/eorm','EORMController@insert');
$router->delete('/eorm','EORMController@delete');
$router->put('/eorm','EORMController@update');

$router->get('/authtest',['middleware'=>'auth','uses'=>'EORMController@selectAll']);

$router->get('/count','EORMController@count');
$router->get('/max','EORMController@max');
$router->get('/min','EORMController@min');
$router->get('/avg','EORMController@avg');
$router->get('/sum','EORMController@sum');
