<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function create()
    {   
        return view('coffee.login', [
            'title' => 'Login',
            'method'=> 'POST',
            'action' => 'home/login'
        ]);
    }
}
