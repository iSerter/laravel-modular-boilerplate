<?php

Route::group([
    'middleware' => 'web',
    'namespace' => 'App\Modules\User\UI\Http\Web\Controllers'
], function () {

    Route::resource('user', 'UserController');

});
