<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PlacesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users = User::pluck('id')->toArray();
        return [
            'user_id'=>$this->faker->randomElement($users),
            'title' => $this->faker->sentence(),
            'tags' => 'Беларусь, Гомель, область',
            'lat' => $this->faker->latitude(),
            'lng' => $this->faker->longitude(),
            'description' => $this->faker->paragraph(5)
        ];


    }
}
