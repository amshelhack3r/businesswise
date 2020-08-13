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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


//post request 
//supply the endpoint in my case its /insert. so inorder to access the api the user will type www.my-website.com/insert
//the second parameter the controller and method to be run after accessing the endpoint
//my controller is InsertController and method is insertData.
//controllers are located in app/Http/Controllers 
$router->post('/insert', 'InsertController@insertData');
