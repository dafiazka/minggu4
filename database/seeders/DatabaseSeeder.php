<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(PostSeeder::class);

        DB::table('posts')->insert([
            'title' => 'Belajar Model Dengan Laravel',
            'author' => 'Wilda',
            'image' => 'https://via.placeholder.com/640x480.png/00ff77?text=Belajar
            Model',
            'content' => 'Belajar Laravel itu menyenangkan',
            'draft' => 0
        ]);
    }
}
