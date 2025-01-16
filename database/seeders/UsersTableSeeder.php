<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Add this to import the User model
use Faker\Factory as Faker; // Add this to import the Faker library
use Illuminate\Support\Str; // Add this to import the Str facade for random strings

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Generate 10 dummy users
        foreach (range(1, 10) as $index) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(), // Set to current time for verified email
                'password' => bcrypt('password'), // Set a default password, preferably hashed
                'remember_token' => Str::random(10), // Use Str::random() instead of str_random()
            ]);
        }
    }
}
