<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Toko;

class LoginController extends Controller
{
    
    public function create()
    {   
        return view('coffee.login', [
            'title' => 'Login',
            'method'=> 'POST',
            'action' => 'login'
        ]);
    }

    // Primitive auth
    public function store(Request $request)
    {   
        foreach (User::get() as $u) {
            if($request->email == $u->email && $request->password == $u->password) {
                foreach(Toko::get() as $t) {
                    if($t->id_user == $u->id) {
                        session(['toko_id' => $t->id]);
                    }
                }
                session(['user_id' => $u->id]);
                return redirect('my_products');
            }
        }
    }
    
}
