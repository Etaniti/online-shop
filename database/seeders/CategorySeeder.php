<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $category = Category::create([
            'name' => 'Столы',
        ]);

        $category = Category::create([
            'name' => 'Стулья',
        ]);

        $category = Category::create([
            'name' => 'Диваны',
        ]);
    }
}
