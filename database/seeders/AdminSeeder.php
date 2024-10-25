<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'name' => 'Admin',
            'email' => 'mahin@gmail.com',  // Set the desired email
            'password' => Hash::make('12345678'),  // Set the desired password
        ]);
    }
}
