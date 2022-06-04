<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Nette\Utils\Random;

class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = Category::count();

        return [
            //
            'category_id' => $this->faker->numberBetween(1, $category),
            'tittle' => $this->faker->name(),
            'url_clean' => Str::random(10).'_'.Str::random(5),
            'conten' => $this->faker->name(),
            'posted' => $this->faker->randomElement(['yes', 'no'])

        ];
    }
}
