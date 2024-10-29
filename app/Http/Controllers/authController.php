<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\auth as AuthModel;
// use App\Models\User;


class authController extends Controller
{
    public function signIn()
    {
        return view("auth.signIn"); // Ensure this view file exists
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth::attempt($credentials)) {
            return redirect()->intended('Home');
        }

        return redirect('login')->withErrors('Login details are not valid');
    }

    public function logout()
    {
        auth::logout();
        return redirect('/');
    }


    public function signUp()
    {
        return view("auth.signUp");
    
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = AuthModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // AuthModel::login($user);

        return redirect('Home');
    }


}
