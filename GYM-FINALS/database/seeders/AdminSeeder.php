<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => ('password'), // Hash the password
            'is_admin' => 1, // Set the is_admin field to 1 for admin user
        ]);

        // Log in the admin user (Optional)
        // auth()->login($admin);

        // Redirect to the admin page (Not applicable in Seeder)
        // return redirect()->route('admin.index'); // Replace 'admin.index' with the name of your admin route
    }
}

