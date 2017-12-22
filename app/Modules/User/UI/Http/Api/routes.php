<?php


$api = app('Dingo\Api\Routing\Router');

$api->version('v1', [
    'prefix' => 'user',
    'namespace' => 'App\Modules\Auth\UI\Http\Api\Controllers',
], function ($api) {

    $api->get('/', 'UserController@index');

});
