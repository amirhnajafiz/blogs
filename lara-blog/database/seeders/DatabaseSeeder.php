<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Database\Factories\UserFactory;
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
        // Adding Admin
        User::factory()->create([
            'name' => 'Amirhossein',
            'email' => 'admin@gmail.com',
            'phone' => '09155232106',
            'password' => '1234',
            'is_admin' => 1
        ]);

        // Importing fake data
        $this->call([
            TagSeeder::class,
            CategorySeeder::class,
            UserSeeder::class
        ]);
    }
}
