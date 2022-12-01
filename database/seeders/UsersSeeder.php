<?php

namespace Database\Seeders;

use App\Models\User;
use App\Traits\Utilities;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    use Utilities;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Super User
        User::create([
            'uuid' => $this->generateUuid(),
            'name' => 'Ndirangu Waweru',
            'email' => 'nwaweru@drash.co.ke',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ])->assignRole('Super User');

        // Landlord
        User::create([
            'uuid' => $this->generateUuid(),
            'name' => 'Ndirangu Waweru',
            'email' => 'ndiranguwaweru@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ])->assignRole('Landlord');
    }
}
