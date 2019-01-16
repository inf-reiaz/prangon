<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessController extends Controller
{
    
    
    public function signup()
    {
        return view('admin.pages.auth.signup');
    }
    
    public function postSignup()
    {
        return view('admin.pages.auth.signup');
    }
    
    
    
    public function signin()
    {
        return view('admin.pages.auth.signin');
    }
    
    
    public function forgot_password()
    {
        return view('admin.pages.auth.forgot_password');
    }
    
    
    
}
