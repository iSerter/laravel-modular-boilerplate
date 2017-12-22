<?php

namespace App\Modules\Auth\UI\Http\Api\Controllers;

use App\Core\Http\Api\Controller;


/**
 * Class LoginController
 * @package App\Modules\Auth\UI\Http\Api\Controllers
 */
class LoginController extends Controller
{
    /**
     * Show all users
     *
     * Get a JSON representation of all the registered users.
     *
     * @Post("/login{?page,limit}")
     * @Versions({"v1"})
     * @Parameters({
     *      @Parameter("username", description="The page of results to view.", default=1),
     *      @Parameter("password", description="The amount of results per page.", default=10)
     * })
     */
    public function login()
    {
        return ['hi there',request()->all()];
    }
}