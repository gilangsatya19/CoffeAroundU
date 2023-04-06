<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class NewpasswordController extends Controller
{
    public function create()
    {
        return view('coffee.forgotPassword2',[
            'title' => 'New Password',
            'method' => 'POST',
            'action' => 'new_password'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        return redirect('index');
        
        
    }
}
