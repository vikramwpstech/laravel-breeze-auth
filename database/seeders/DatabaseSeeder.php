<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'profile_picture' => 'profile.jpg',
            'email_verified_at' => now(),
            'password' => Hash::make('Admin@7727'),
            'bio' => "",
            'remember_token' => Str::random(10),
        ]);
        User::factory(10)->create();
        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Admin@7727'),
            'email_verified_at' => now(),
        ]);
    }
}
