<?php

namespace Database\Seeders;
use Database\Factories\JogoFactory;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(JogoSeeder::class);
        $this->call(CategoriaSeeder::class);
    }
}
