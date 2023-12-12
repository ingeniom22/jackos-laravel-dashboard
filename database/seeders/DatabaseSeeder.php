<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CustomerSeeder::class,
            EmployeeSeeder::class,
            PaymentSeeder::class,
            ServiceSeeder::class,
            TransactionSeeder::class,
        ]);
    }
}
