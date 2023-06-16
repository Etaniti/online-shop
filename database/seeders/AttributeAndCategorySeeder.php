<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class AttributeAndCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $attributeData = [
            ['name' => 'Длина'],
            ['name' => 'Ширина'],
            ['name' => 'Высота'],
            ['name' => 'Материал'],
        ];

        $category = Category::create([
            'name' => 'Столы',
        ]);

        $category->attributes()->createMany($attributeData);

        $category = Category::create([
            'name' => 'Стулья',
        ]);

        $category->attributes()->createMany($attributeData);

        $category = Category::create([
            'name' => 'Диваны',
        ]);

        $category->attributes()->createMany($attributeData);
    }
}
