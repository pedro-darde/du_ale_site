<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    use AuthenticatesUsers;

    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        dd('aqui');
        // $this->validateLogin($request);

        $credentials = $request->only('email', 'password');


        dd($credentials);
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin/dashboard');
        }
    }
}
