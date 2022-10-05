<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DeliveryTypeSeeder::class,
            DiscountTypeSeeder::class,
            PaymentTypeSeeder::class,
            StatusTypeSeeder::class,
            UserTypeSeeder::class,
            UserSeeder::class,
        ]);
    }
}
