<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tags')->insert([
            'name' => "berita",                
        ]);

        DB::table('tags')->insert([
            'name' => "mantra",                
        ]);

        DB::table('tags')->insert([
            'name' => "tokoh",                
        ]);
    }
}
