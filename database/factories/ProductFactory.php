<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Direction;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'direction_id' => Direction::inRandomOrder()->first()->id,
            'image' => $this->faker->imageUrl(640, 480, 'products', true, 'Product'),
            'name' => $this->faker->randomElement([
                'Свежая вода AquaLife',
                'Энергетик Turbo Boost',
                'Сок Яблочный Vita',
                'Кола Черная',
                'Лимонад Классический',
                'Минералка Borjomi',
                'Вода Горная Ключевая',
                'Сок Апельсиновый Сочный День',
                'Напиток Газированный Бум',
                'Сок Виноградный Золотая Лоза',
                'Минеральная Вода Essentuki 17',
                'Энергетик Drive Energy',
                'Сок Мультифруктовый SunMix',
                'Кола Красная Искра',
                'Лимонад Дюшес Старинный',
                'Вода Родниковая Жемчуг',
                'Сок Персиковый Нектарин',
                'Газировка Мандариновый Взрыв',
                'Сок Томатный Домашний',
                'Минералка Narzan',
                'Энергетик Wild Power',
                'Сок Грушевый Уют',
                'Вода Ледниковая Чистота',
                'Кола Классическая NovaCola',
                'Сок Черносмородиновый Лесная Ягода',
                'Газировка Барбарисовая Радость',
                'Сок Морковный Полезный Выбор',
                'Минеральная Вода AquaTherapy',
                'Энергетик Ночной Пульс',
                'Лимонад Вишневый Заряд'
            ]),

            'description' => $this->faker->sentence(),
            'volume' => $this->faker->randomElement(['0.5L', '1L', '1.5L']),
            'material' => $this->faker->randomElement(['Plastic', 'Glass', 'Tetra Pak']),
            'price' => $this->faker->numberBetween(10000, 50000),
            'amount' => $this->faker->numberBetween(1, 100),
            'is_available' => $this->faker->boolean(90),
        ];
    }
}
