<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class MembershipController extends Controller
{
    /**
     * Show the membership registration form.
     */
    public function showRegistrationForm()
    {
        return view('membership_registration');
    }

    public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6',
        // 'membership_duration_start' => 'required|in:1,3,6,9', // Validate against predefined durations
    ]);

    // Retrieve the selected duration from the request
    $selectedDuration = $request->input('membership_duration_start');

    // Set the start date to the current date
    $startDate = now();

    // Calculate the expiry date in terms of months and days based on selected duration
    $expiryDate = $this->calculateExpiryDate($startDate, $selectedDuration);

    // Create a new user with the provided data
    $user = \App\Models\User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => $request->input('password'), // Remove Hash::make
        'membership_duration_start' => $startDate, // Store the start date
        'membership_duration_end' => $expiryDate, // Store the expiry date
    ]);

    // You can perform additional actions like sending emails, logging in the user, etc.

    return redirect()->route('login')->with('success', 'Registration successful! Your membership will expire on ' . $expiryDate);
}
    private function calculateExpiryDate(Carbon $startDate, $selectedDuration)
    {
        // Calculate the expiry date based on an average month of 30 days
        $expiryDate = $startDate->copy()->addDays($selectedDuration * 30);

        return $expiryDate;
    }

    public function showMembershipInfo()
{
    // Assuming you have the user instance loaded (e.g., from authentication)
    $user = auth()->user();

    return view('account', compact('user'));
}

}
