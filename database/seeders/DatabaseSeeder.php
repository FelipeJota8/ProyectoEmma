<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user_admin = User::create([
            'name' => 'Administrador',
            'email' => 'admin@embebidos.pucv.cl',
            'password' => Hash::make('admin123'),
        ]);
    }
}