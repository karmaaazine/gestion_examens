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
>>>>>>> f1501c7b8d83b5ed213f8f641e83b7830a663ac8
}
