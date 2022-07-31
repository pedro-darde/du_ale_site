<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create() {
        return view('user-create');
    }

    public function store(Request $request)
    {
        $request->validate(['email' => 'required|email', 'password' => 'required']);

        $user = User::create($request->all());

        return Response()->json($user);
    }
}
