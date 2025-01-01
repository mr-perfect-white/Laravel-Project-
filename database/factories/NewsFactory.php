<?php

namespace Database\Factories;

use App\Models\News;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{

     protected $model = News::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),  // Creates a user and links it to the news
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
