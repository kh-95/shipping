<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'fullname' => "Admin",
            'login_id' => "123456",
            'phone' => "123456789",
            'email' => "admin@info.com",
            'is_active' => 1,
            'login_id' => '123456',
            'email_verified_at' => now()->addDay(rand(1, 6)),
            'phone_verified_at' => now()->addDay(rand(1, 6)),
            'password' => '$2y$10$Sia.k.G2O7O0iC7DkS1rfu04OkddifmLT20YzxP7NfNQ5M2LNOb/y', // secret
            'user_type' => 'admin', // secret
            'gender' => 'male', // secret
            'remember_token' => Str::random(10),

        ]);

    }
}
