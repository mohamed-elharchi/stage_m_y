<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;


class LoginController extends Controller
{


    public function indexLogin(){
        return view('dashboard.login');
    }

    public function indexDashboard(){
        return view('dashboard.index');
    }
 

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        $user = Admin::where('email', $credentials['email'])->first();
        if ($user && $user->password === $credentials['password']) {
            Auth::guard()->loginUsingId($user->id);


            $request->session()->regenerate();

            return redirect()->route('indexDashboard')->with("success","You have been logged in successfully");
        }



        return back()->withErrors(['email' => 'Invalid email or password.'])->withInput();
    }
    public function logout(){
        FacadesSession::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
