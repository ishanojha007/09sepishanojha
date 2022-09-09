<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('admin.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        Auth::logout();
        $remember_me = $request->has('remember_me') ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Admin'], $remember_me)) {
            return redirect()->route('admin.dashboard')->with('success', 'Login Success');
        }
        return redirect()->back()->with('Failed', 'Invalid username or password.');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('admin.login');
    }
}
