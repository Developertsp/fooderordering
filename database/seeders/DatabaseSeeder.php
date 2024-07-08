<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::create([
            'name'       => 'Software Manager',
            'email'      => 'softwaremanager@gmail.com',
            'role'       => 1,
            'company_id' => NULL,
            'password'   => Hash::make('12345678'),
            'created_by' => 1,
        ]);
    }
}
