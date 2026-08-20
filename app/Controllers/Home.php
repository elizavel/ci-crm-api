<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('landing/login');
    }

    public function dashboard(): string
    {
        return view('landing/dashboard');
    }
}
