<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use Illuminate\Auth\Events\Login;
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
    public function displayInfo()
    {
        $user = Auth::user();
        if ($user->role === 'teacher') {
            return view('dashboard.teacher_dashboard.editProfile', compact('user'));
        } else {
            return view('dashboard.director_dashboard.editInfo', compact('user'));
        }
    }

    public function saveInfo(LoginRequest $request)
    {


        $user = Auth::user();
        if (!Hash::check($request->input('current_password'), $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        Admin::where('id', $user->id)->update([
            'password' => Hash::make($request->input('new_password')),
        ]);

        return redirect()->route('logout')->with('success', 'Password updated successfully.');
    }

    public function saveNew(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
            'email' => 'required|email',
            'name' => 'required',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->input('current_password'), $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        Admin::where('id', $user->id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('new_password')),
        ]);


        return redirect()->route('logout')->with('success', 'Password updated successfully.');
    }




    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // dd(hash::make('azer1234'));
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role === 'director') {
                return redirect()->route('general_guard')->with("success", "You have been logged in successfully");
            } elseif ($user->role === 'general_guard') {
                return redirect()->route('displayMatieres')->with("success", "You have been logged in successfully");
            } elseif ($user->role === 'teacher') {
                return redirect()->route('teacherDashboard')->with("success", "You have been logged in successfully");
            }

            return redirect()->route('accueil')->with("success", "You have been logged in successfully");
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
