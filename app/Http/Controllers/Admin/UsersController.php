<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        return view('admin.create-user');
    }

    public function store(Request $request)
    {
        $request->validate(['email' => 'required|email', 'password' => 'required']);

        User::create($request->all());

        return redirect()->to('/admin/dashboard');
    }
}
