<?php


$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->any('login', 'App\Modules\Auth\UI\Http\Api\Controllers\LoginController@login');
});
