<?php


Route::middleware('web')
    ->prefix('auth')
    ->namespace('App\Modules\Auth\UI\Http\Web\Controllers')->group(function()
{

    Route::get('login', 'LoginController@showLoginForm')->name('auth.login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('auth.logout');

    // Registration Routes...
    Route::get('register', 'RegisterController@showRegistrationForm')->name('auth.register');
    Route::post('register', 'RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('auth.password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('auth.password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('auth.password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset');

});
