<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Default credentials
        \App\Models\User::insert([
            [
                'name' => 'siavash',
                'email' => 'akbarzadehsiavash@gmail.com',
                'wall_address' => '1231234',
                'email_verified_at' => now(),

                'password' => Hash::make('30yavash@Ayda6667'), // password

                'remember_token' => Str::random(10)
            ]
        ]);

        // Fake users
        User::factory()->times(9)->create();
    }
}
