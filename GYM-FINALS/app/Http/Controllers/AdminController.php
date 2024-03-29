<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
{
    $users = User::where('is_admin', 0)->get(); // Get all non-admin users
    return view('admin.dashboard', ['users' => $users]);
}


// public function dboard()
// {
//     return view('dboard');
// }
}