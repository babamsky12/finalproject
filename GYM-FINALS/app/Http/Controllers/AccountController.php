<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        // Assuming you have the user instance loaded (e.g., from authentication)
        $user = auth()->user();

        return view('account', compact('user'));
    }

    

    // public function backToIndex()
    // {
    //     return redirect('/index');
    // }
}
