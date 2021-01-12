<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name" => "Outman el bazzouna",
            "email" => "admin@outman.com",
            "password" => Hash::make("123456789"),
            "role_id" => 1,
            "photo" => "shiro.png",
            "created_at" => now()
        ]);
    }
}
