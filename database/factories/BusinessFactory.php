<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Business>
 */
class BusinessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'user_id' => 4,
            'proprietor' => fake()->name,
            'category_id'=> fake()->numberBetween(3,9),
            'primary_contact' =>fake()->phoneNumber(),
            'secondary_contact' =>fake()->phoneNumber(),
            'secondary_contact' =>fake()->phoneNumber(),
            'description' => fake()->text,
            'email' => fake()->email(),
            'website' => fake()->freeEmailDomain(),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'state' => fake()->state(),
            'pincode' => fake()->postcode(),
            'image' => fake()->imageUrl(400,400),
        ];
    }
}
