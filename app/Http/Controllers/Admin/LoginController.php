<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
        // auth()->login($user, true);
    }
}
