<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    public function login()
    {
        if (View::exists('user.login')) {
            return view('user.login');
        } else {
            return abort(404);
        }
    }
    public function register()
    {

        return view('user.register');
    }
}
