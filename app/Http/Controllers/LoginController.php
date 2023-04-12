<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Toko;

class LoginController extends Controller
{
    public function index()
    {
        return view('coffee.login',[
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            
            return redirect()->intended('/my_toko/create');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
    // public function create()
    // {   
    //     return view('coffee.login', [
    //         'title' => 'Login',
    //         'method'=> 'POST',
    //         'action' => 'login'
    //     ]);
    // }

    // // Primitive auth
    // public function store(Request $request)
    // {   
    //     foreach (User::get() as $u) {
    //         $found = false;
    //         if($request->email == $u->email && $request->password == $u->password) {
    //             foreach(Toko::get() as $t) {
    //                 if($t->id_user == $u->id) {
    //                     session(['toko_id' => $t->id]);
    //                     session(['toko_nama' => $t->nama]);
    //                     $found = true;
    //                 }
    //             }
    //             session(['user_id' => $u->id]);
    //             session(['user_nama' => $u->name]);
    //             if($found) {
    //                 return redirect('home');
    //             } else {
    //                 return redirect('/my_toko/create');
    //             }
    //         }
    //     }
    // }
    
}
