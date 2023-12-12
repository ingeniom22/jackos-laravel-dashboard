<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Seed 10 rows with Faker-generated data
        for ($i = 1; $i <= 10; $i++) {
            Employee::create([
                'employee_name' => $faker->name,
                'email' => $faker->email,
                'phone_no' => $faker->phoneNumber,
                'contract_start_date' => $faker->date,
                'contract_end_date' => $faker->date,
            ]);
        }
    }
}
