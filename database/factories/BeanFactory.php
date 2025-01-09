<?php

namespace Database\Factories;

use App\Models\Bean;
use Illuminate\Database\Eloquent\Factories\Factory;

class BeanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bean::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'subtitle' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 100, 500), // Random price between 100 and 500
            'img' => $this->faker->imageUrl(),
            'arrived_at' => $this->faker->dateTimeThisYear(),
            'total_sales' => $this->faker->numberBetween(0, 1000), // Random total sales between 0 and 1000
        ];
    }
}
