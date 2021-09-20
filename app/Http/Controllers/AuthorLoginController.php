<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorLoginController extends Controller
{

    public function login()
    {
        return view('pages.login');
    }
}
