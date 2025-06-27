<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Direction::insert([
            ['name' => 'Бутылки', 'description' => 'Производство пластиковых бутылок'],
            ['name' => 'Вода', 'description' => 'Розлив и упаковка питьевой воды'],
            ['name' => 'Соки', 'description' => 'Производство и розлив соков'],
        ]);
        
    }
}
