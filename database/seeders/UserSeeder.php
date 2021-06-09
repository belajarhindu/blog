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
            'email' => "superadmin@belajarhindu.com",
            'email_verified_at' => Carbon::now()->toDateString(),            
            'password' => Hash::make('superadmin'),
        ]);

        DB::table('users')->insert([
            'name' => "AdminGanteng",
            'email' => "admin@forex.com",
            'email_verified_at' => Carbon::now()->toDateString(),            
            'password' => Hash::make('admin'),
        ]);
    }
}
