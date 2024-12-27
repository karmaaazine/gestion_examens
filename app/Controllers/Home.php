<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
<<<<<<< HEAD
=======
    public function register(): string
    {
        return view('register');
    }
>>>>>>> 399ad472520c71034827e28f9baf4abab57b0981
}
