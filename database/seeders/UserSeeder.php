<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::create([
            'name' => 'admin',
            'role_id' => 1,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);


    }
}
