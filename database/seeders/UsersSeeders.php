<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('users')->insert([
            [
                'name' => 'normal user',
                'status' => 'active',
                'role' => 'user',
                'email' => 'testuser@example.com',
                'password' => bcrypt('password')
            ],

            [
                'name' => 'normal user',
                'status' => 'active',
                'role' => 'vendor',
                'email' => 'vendor@example.com',
                'pasword' => bcrypt('password')
            ],

            [
                'name' => 'Amdin user',
                'status' => 'active',
                'role' => 'admin',
                'email' => 'admin@example.com',
                'pasword' => bcrypt('password')
            ]
        ]);
    }
}
