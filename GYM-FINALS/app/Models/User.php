<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Carbon;
use Spatie\Permission\Models\Role;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, HasRoles;

    protected $table = 'users'; // Specify the correct table name

    protected $fillable = [
        'name', 'email', 'password', 'membership_duration_start', 'membership_duration_end',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'membership_duration_start' => 'datetime', // Cast to datetime
        'membership_duration_end' => 'datetime', // Cast to datetime
    ];

    // Example of a mutator to set the password attribute (remove bcrypt)
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = ($value);
    }

    // Implement the getAuthPassword method from MustVerifyEmail interface
    public function getAuthPassword()
    {
        return $this->attributes['password'];
    }

    public function assignRole($roleName)
{
    $role = Role::where('name', $roleName)->first();
    if ($role) {
        $this->roles()->attach($role);
    }
}



    // Add any other necessary methods or properties
}