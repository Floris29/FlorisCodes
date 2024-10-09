<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            'name' => 'Test Project 1',
            'description' => 'Description for Project 1',
            'images' => 'https://imgs.search.brave.com/1GuTi4n5E1ftCfH0fE7ULi5t6Az3A6CN821ZmvHfGTQ/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9kb2Nz/LnRlc3RhcmNoaXRl/Y3QuY29tL2ltYWdl/cy9UQV9IZWxwL0lt/YWdlcy90ZXN0X3Jl/c3VsdF91bnZlcmlm/aWVkX25vZGUucG5n',
        ]);
    }
}
