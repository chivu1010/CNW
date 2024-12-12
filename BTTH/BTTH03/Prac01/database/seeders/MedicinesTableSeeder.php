<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i = 0; $i < 20; $i++){
            $medicineId = DB::table('medicines')->insertGetId([
                'name' => $faker->name(),
                'brand' => $faker->name() . "Pharmacy",
                'dosage' => $faker->word(),
                'form' => $faker->word(),
                'price' => $faker->numberBetween(100, 2000),
                'stock' => $faker->numberBetween(50, 200)
            ]);
        }
    }
}