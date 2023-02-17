<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CrustListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'crustTitle' => $this-> faker->sentence(),
            'tags' => 'laravel, api, backend', 
            'company' => $this->faker->company(), 
            'contactEmail' => $this->faker->companyEmail(), 
            'website' => $this->faker->url(), 
            'crustLocation' => $this->faker->city(), 
            'crustDescription' => $this->faker->paragraph(5), 
        ];
    }
}
