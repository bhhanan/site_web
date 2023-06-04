<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;


class RegisterController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        user::create([
          'name' => $input['name'],
          'password' => Hash::make($input['password'])
        ]);
        return view('layouts');
    }
}
