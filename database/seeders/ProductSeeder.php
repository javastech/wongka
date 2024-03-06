<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
            ['name' => 'Tukutuku', 'slug' => 'tukutuku', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Banjoo', 'slug' => 'banjoo', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Taktis', 'slug' => 'Taktis', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'EMS', 'slug' => 'ems', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Schoolaria', 'slug' => 'schoolaria', 'created_at' => now(), 'updated_at' => now()],
        );

        Product::insert($data);
    }
}
