<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthComtroller extends Controller
{
    public function login(request $request)
    {
        return view('auth/login')->with('message', '');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function loginSubmit(request $request)
    {
        $fields = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        //check email
        $user = User::where('email', $fields['email'])->first();
        //check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return view('auth/login')->with('message', 'Email id or password is incorrect');
        }

        $token = $user->createToken('env.APP_NAME')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token,
        ];

        // return response($response, 200);
        return redirect('/user');
    }

    public function registerSubmit(request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'confirmPassword' => 'required|same:password',
        ]);
        $fields = $request->only(['name', 'email', 'password']);
        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => Hash::make($fields['password']),
        ]);
        $token = $user->createToken('env.APP_NAME')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token,
        ];
        // return response($response, 200);
        return redirect('/login');
    }
    public function view()
    {
        $users = User::all();
        return view('view', ['users' => $users]);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response(201);
    }
}
