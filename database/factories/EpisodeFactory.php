<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Episode;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpisodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Episode::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {   
        $user = User::factory();    
         
        return [
            'chapter_id' => 1,
            'episode_title' => $this->faker->text($maxNbChars = 12),
            'episode_short_description' => $this->faker->sentence(),
            'episode_long_description' => $this->faker->text($maxNbChars = 150),
            'explicit' => 'yes',
            'user_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'user_email' => $this->faker->safeEmail(),
            'url' => 'https://www.robsrobots.co.uk',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}