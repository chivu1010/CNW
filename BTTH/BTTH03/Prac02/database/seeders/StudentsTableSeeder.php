<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Get list of class IDs from the database
        $classIds = DB::table('classes')->pluck('id')->toArray();

        if (empty($classIds)) {
            throw new \Exception('No classes found. Please run the ClassesTableSeeder first.');
        }

        $studentsCount = rand(1, 5);
        for ($j = 0; $j < $studentsCount; $j++) {
            DB::table('students')->insert([
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'date_of_birth' => $faker->date('Y-m-d'),
                'parent_phone' => $faker->phoneNumber(),
                'class_id' => $faker->randomElement($classIds), // Randomly assign a class
            ]);
        }
    }
}
