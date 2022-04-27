<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Carbon\Carbon;

class RentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   $start_date=$this->faker->dateTimeBetween('-2 month','-1 month');
        $end_date=$this->faker->dateTimeBetween('-1 month','+1 month');

        return [
            'name'=>$this->faker->text(40),
            'description'=>$this->faker->sentence(200),
            'address'=>$this->faker->text(100),
            'price'=>$this->faker->randomFloat(1,50,1000),
            'images'=>'uploads/vkdxV9f2TDk0CGKLog5BDiKHlB2tER8MXlSiZCCO.jpg',
           'startDate'=>Carbon::parse($start_date)->format('Y-m-d'),
            'endDate'=>Carbon::parse($end_date)->format('Y-m-d'),
            // 'user_id'=>$this->faker->randomElement($array = array (1,2))
            'user_id'=>User::where("owner", 1)->inRandomOrder()->first()->id // kap vetem ato qe kane user owner


        ];
    }
}
