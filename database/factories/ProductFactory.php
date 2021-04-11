<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text(200),
            'value' => $this->faker->numberBetween(1, 111),
            'quantity' => $this->faker->numberBetween(1, 111),
            'bar_code' => $this->faker->numberBetween(1, 111111),
            'user_id' => $this->faker->numberBetween(1, 11)
        ];
    }
}
