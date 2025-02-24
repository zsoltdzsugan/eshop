<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin user',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('admin'),
            ],
            [
                'name' => 'Vendor user',
                'username' => 'vendor',
                'email' => 'vendor@vendor.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'User user',
                'username' => 'user',
                'email' => 'user@user.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('password'),
            ],
        ]);
    }
}
