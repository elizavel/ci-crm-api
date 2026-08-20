<?php

namespace App\Controllers;

class UserAccount extends BaseController
{
    public function signup(): string
    {
        return view('landing/signup');
    }

    public function verifyAccount(): string
    {
        return view('landing/verify_email');
    }

    public function login(): string
    {
        return view('landing/login');
    }

    public function logout(): string
    {
        return view('landing/logout');
    }
}
