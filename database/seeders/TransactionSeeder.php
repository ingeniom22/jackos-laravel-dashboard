<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Seed 10 rows with Faker-generated data
        for ($i = 1; $i <= 10; $i++) {
            Transaction::create([
                'customer_id' => $faker->numberBetween(1, 10), // Assuming 10 customers exist
                'service_id' => $faker->numberBetween(1, 10),  // Assuming 10 services exist
                'employee_id' => $faker->numberBetween(1, 10), // Assuming 10 employees exist
                'payment_id' => $faker->numberBetween(1, 10),  // Assuming 10 payments exist
            ]);
        }
    }
}
