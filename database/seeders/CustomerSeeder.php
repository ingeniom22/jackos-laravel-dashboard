<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Seed 10 rows with Faker-generated data
        for ($i = 1; $i <= 10; $i++) {
            Customer::create([
                'customer_name' => $faker->name,
                'phone_no' => $faker->phoneNumber,
                'membership' => $faker->randomElement(['gold', 'silver', 'bronze']),
            ]);
        }
    }
}
