<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
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
        //
        //
        DB::table('users')->insert([
            'name' => "SuperAdmin Ganteng",
            'username' => "superadmin",
            'email' => "superadmin@belajarhindu.com",
            'email_verified_at' => Carbon::now()->toDateString(),            
            'password' => Hash::make('qwerty123
            '),
        ]);

        DB::table('users')->insert([
            'name' => "AdminGanteng",
            'username' => "admin",
            'email' => "admin@forex.com",
            'email_verified_at' => Carbon::now()->toDateString(),            
            'password' => Hash::make('qwerty13'),
        ]);

        DB::table('users')->insert([
            'name' => "januar elsan",
            'username' => "januarelsan",
            'email' => "januarelsan@gmail.com.com",
            'email_verified_at' => Carbon::now()->toDateString(),            
            'password' => Hash::make('qwerty123'),
        ]);
    }
}
