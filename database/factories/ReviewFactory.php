<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Rent;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description'=>$this->faker->text(200),
            'user_id'=>User::where("owner", 0)->inRandomOrder()->first()->id,
            'rent_id'=>Rent::inRandomOrder()->first()->id
        ];
    }

}
