<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; // Add this line
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }


    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    $user = User::where('email', $credentials['email'])->first();

        if ($user && $user->password === $credentials['password']) { // Compare provided password with stored password
            Auth::login($user);
            if ($user->is_admin == 1) {
                return redirect()->route('admin.dashboard')->with('success', 'You are now logged in as user ' . $user->name);
            } else {
                return redirect('/')->with('success', 'You are now logged in.');
            }
        } else {
            return redirect()->route('login')->with('error', 'Invalid email or password');
        }
}

public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/')->with('success', 'You are now logged out.');
}
}
