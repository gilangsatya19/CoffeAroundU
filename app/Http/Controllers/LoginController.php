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
            $tokos = Toko::get();
            $has_toko = false;
            foreach($tokos as $t) {
                if ($t->user_id == auth()->user()->id) {
                    $has_toko = true;
                    session(['toko_id' => $t->id]);
                    session(['toko_nama' => $t->nama]);
                }
            }
            if($has_toko) {
                return redirect('/home');
            } else {
                return redirect('/my_toko/create');
            }
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
    
    
}
