<?php

Route::group(['middleware' => 'web', 'prefix' => 'user', 'namespace' => 'App\\Modules\User\UI\Http\Web\Controllers'], function()
{
    Route::get('/', 'UserController@index');
});
