<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Direction;

class DirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        Direction::factory()->createMany([
            [
                'name' => 'Бутылки',
                'description' => 'Разнообразные пластиковые и стеклянные бутылки для напитков и жидкостей.',
                'symbol_code' => 'bottles',
                'created_at' => now(),
            ],
            [
                'name' => 'Соки',
                'description' => 'Фруктовые и овощные соки в упаковках и бутылках.',
                'symbol_code' => 'juices',
                'created_at' => now(),
            ],
            [
                'name' => 'Вода',
                'description' => 'Питьевая вода: минеральная, газированная и негазированная.',
                'symbol_code' => 'water',
                'created_at' => now(),
            ],
            [
                'name' => 'Газированные напитки',
                'description' => 'Напитки с пузырьками: кола, лимонад, тоники и другие.',
                'symbol_code' => 'soda',
                'created_at' => now(),
            ],
            [
                'name' => 'Энергетики',
                'description' => 'Напитки, повышающие бодрость и концентрацию.',
                'symbol_code' => 'energy-drinks',
                'created_at' => now(),
            ],
        ]);
    }
}
