<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) {
            Service::create([
                'service' => $faker->randomElement(['Full Service', 'Potong Biasa', 'Cuci Rambut', 'Coloring']),
                'service_description' => $faker->text,
                'effective_start_date' => $faker->date,
                'effective_end_date' => $faker->date
            ]);
        }
    }
}
