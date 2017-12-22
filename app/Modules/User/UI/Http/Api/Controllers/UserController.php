<?php

namespace App\Modules\User\UI\Http\Api\Controllers;

use App\Core\Http\Api\Controller;


/**
 * Class UserController
 * @package App\Modules\User\UI\Http\Api\Controllers
 */
class UserController extends Controller
{
    public function index()
    {
        return $this->response->noContent();
    }
}