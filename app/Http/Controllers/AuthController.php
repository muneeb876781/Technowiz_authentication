<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|regex:/^03[0-9]{9}$/',
        ]);

        $phone_number = $request->input('phone_number');

        $user = User::firstOrCreate(['phone_number' => $phone_number]);

        Auth::login($user);

        return redirect()->route('welcome');
    }

    public function welcome()
    {
        return view('home');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
