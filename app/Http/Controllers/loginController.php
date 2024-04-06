<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;


class LoginController extends Controller
{


    public function indexLogin()
    {
        return view('dashboard.login');
    }

    // public function directorDashboard()
    // {
    //     return view('layouts.directorLayout');
    // }
    public function teacherDashboard()
    {
        return view('dashboard.teacher_dashboard.index');
    }


    // public function login(Request $request)
    // {
    //     // dd(hash::make('azer1234'));
    //     $credentials = $request->only('email', 'password');

    //     $user = Admin::where('email', $credentials['email'])->first();

    //     if ($user && Hash::check($credentials['password'], $user->password)) {

    //         // if ($user->role === 'director') {
    //         //     return redirect()->route('indexDashboard')->with("success", "You have been logged in successfully");
    //         // } elseif ($user->role === 'teacher') {
    //         // }

    //         Auth::login($user);
    //         $request->session()->regenerate();
    //         return redirect()->route('indexDashboard')->with("success", "You have been logged in successfully");
    //     }

    //     return back()->withErrors(['email' => 'Invalid email or password.'])->withInput();
    // }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // dd(hash::make("ayoub1234"));
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role === 'director') {
                return redirect()->route('general_guard')->with("success", "You have been logged in successfully");

            } elseif ($user->role === 'general_guard') {
                return redirect()->route('general_guard')->with("success", "You have been logged in successfully");

            } elseif ($user->role === 'teacher') {
                return redirect()->route('teacherDashboard')->with("success", "You have been logged in successfully");
            }

            return redirect()->route('ayoubACCUAUSD')->with("success", "You have been logged in successfully");
        }

        return back()->withErrors(['email' => 'Invalid email or password.'])->withInput();
    }




    public function logout()
    {
        FacadesSession::flush();
        Auth::logout();
        return redirect()->route('accueil');
    }
}
