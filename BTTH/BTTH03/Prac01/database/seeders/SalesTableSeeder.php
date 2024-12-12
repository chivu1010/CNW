<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    function generateFixedLinePhone()
    {
        return '08' . rand(10000000, 99999999);
    }

    public function run(): void
    {       
        $faker = Faker::create();

        // Lấy danh sách medicine_id từ bảng medicines
        $medicineIds = DB::table('medicines')->pluck('medicine_id')->toArray();

        // Kiểm tra nếu bảng medicines không có dữ liệu
        if (empty($medicineIds)) {
            throw new \Exception('No medicines found in the database. Please seed the medicines table first.');
        }

        $salesCount = rand(2, 6); // Số bản ghi cần tạo

        for ($j = 0; $j < $salesCount; $j++) {
            $medicineId = $faker->randomElement($medicineIds); // Chọn ngẫu nhiên một medicine_id

            DB::table('sales')->insert([
                'quantity' => $faker->numberBetween(10, 100),
                //'sale_date' => $faker->dateTimeBetween('-1 year', 'now'),
                'customer_phone' => $this->generateFixedLinePhone(),
                'medicine_id' => $medicineId, // Gán medicine_id đã lấy được
            ]);
        }
    }
}
