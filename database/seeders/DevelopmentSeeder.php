<?php

namespace Database\Seeders;

use App\Models\Rent;
use Illuminate\Database\Seeder;

class DevelopmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $this->call(RentSeeder::class);
    }
}
