<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AuthComtroller extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function loginSubmit(request $request)
    {
        $fields = $request->validate([

            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        //check email
        $user = User::where('email', $fields['email'])->first();
        //check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'masseage' => 'Email id or password is incorrect.',
            ], 401);
        }
        $token = $user->createToken('env.APP_NAME')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token,
        ];

        // return response($response, 200);
        return view('/dashboard/dashboard');
    }

    public function registerSubmit(request $request)
    {
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
        $users=User::all();
        return view('view',['users'=>$users]);
    }
   
}
