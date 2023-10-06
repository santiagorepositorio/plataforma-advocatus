<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'url' => 'https://youtu.be/siFHBmWUBIg?si=AkqCuySn7JtHjN1D',
            'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/siFHBmWUBIg?si=_zDR5S4YUFQkncIk" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; web-share" allowfullscreen></iframe>',
            'platform_id' => 1,

        ];
    }
}
