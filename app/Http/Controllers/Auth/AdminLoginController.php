<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

    public function __construct() {
        //redirect guests
        $this->middleware('guest:admin');
    }

    public function showLoginForm() {
        return view('auth.admin-login');
    }

    public function login(Request $request) {
        //validate form data
        $this->validate($request, ['email' => 'required|email', 'password' => 'required|min:5']);
        //try to login
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->intended(route('admin.dashboard')); //send to dashboard after succesful login
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));

    }

    public function logout(Request $request) {
        $this->Auth::logout();
        $request->Session::flush();
        $request->Session::regenerate();
        return redirect('/admin/login');
    }
}
