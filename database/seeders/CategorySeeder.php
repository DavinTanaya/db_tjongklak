<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Men'],
            ['name' => 'Women'],
            ['name' => 'Batik Cloth'],
            ['name' => 'Others'],
        ];

        foreach ($categories as $cat) {
            Category::create($cat);
        }
    }
}
