<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function edit()
    {
        return view('user.edit');
    }

    public function show()
    {
        return view('user.show');
    }

    public function destroy()
    {
        return view('user.destroy');
    }
}
