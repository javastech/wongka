<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
            ['name' => 'Retail', 'slug' => 'retail', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Corporate', 'slug' => 'corporate', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'UMK', 'slug' => 'umkm', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Banking', 'slug' => 'banking', 'created_at' => now(), 'updated_at' => now()],
        );

        Category::insert($data);
    }
}
