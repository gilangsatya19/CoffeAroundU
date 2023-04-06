<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ForgotpasswordController extends Controller
{

    public function create()
    {
        return view('coffee.forgotPassword',[
            'title' => 'Forgot Password',
            'method' => 'GET',
            'action' => 'forgot_password'
        ]);
    }

    
    public function store(Request $request)
    {
        foreach (User::get() as $u) {
            if($request->email == $u->email && $request->phone_number == $u->phone_number) {
                
                return redirect('new_password/create');
            }
        }
        return redirect('forgot_password/create');
    }

    
}
