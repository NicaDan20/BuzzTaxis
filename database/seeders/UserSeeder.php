<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role'=>'Administrator',
        ]);

        DB::table('roles')->insert([
            'role'=>'Editor'
        ]);

        DB::table('roles')->insert([
            'role'=>'User'
        ]);

        DB::table('users')->insert([
            'name'=>"Florin Buzea",
            'email'=>"danut.nica@gmail.com",
            'password' => Hash::make('admin'),
            'role_id' => 1
        ]);
    }
}
