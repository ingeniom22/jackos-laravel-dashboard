<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) {
            Payment::create([
                'payments' => $faker->randomElement(['OVO', 'GoPay', 'ShopeePay', 'QRIS', 'Bank Transfer']),
                'description' => $faker->text,
                'fee' => $faker->randomFloat(2, 0, 0.1),
            ]);
        }
    }
}
