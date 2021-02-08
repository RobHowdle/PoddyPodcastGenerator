<?php

namespace Database\Factories;

use App\Models\Chapter;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChapterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Chapter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'chapter_name' => $this->faker->unique()->word . ' Chapter',
            'chapter_description' => $this->faker->sentence,
            'chapter_image' => 'https://via.placeholder.com/300',
            'chapter_creation' => $this->faker->dateTime,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}