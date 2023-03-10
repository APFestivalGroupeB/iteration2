<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $utilisateurIds = UserFactory::all()->pluck('id')->toArray();

        return [

            'date_fin' => date('Y-m-d', strtotime(date('Y-m-d').' + 30 days')),
            'utilisateur_id' => $this->faker->randomElement($utilisateurIds),

        ];
    }
}
