<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
          [
            "name" => "admin",
            "email" => "admin@secret.com",
            "password" => Hash::make("12345")
          ]
        ])->each(function($user) {
          DB::table('users')->insert($user);
      });
    }
}
