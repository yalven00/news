<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
use App\Models\News;
use Illuminate\Support\Str;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

      /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    public function definition(): array
    {
             return [
            'title' => $this->faker->text(),
            'slug' => Str::slug($this->faker->text()),
            'description' => $this->faker->paragraph(),
            'content' => $this->faker->paragraph(),
            'author' => $this->faker->name,
            'category' => $this->faker->text(),
        ];

        
    }
}
