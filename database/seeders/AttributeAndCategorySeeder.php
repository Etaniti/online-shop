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
        $category = Category::create([
            'name' => 'Компьютерная техника',
            'parent_id' => null,
        ]);

        $attributeData = [
            ['name' => 'Линейка'],
            ['name' => 'Тип'],
            ['name' => 'Операционная система'],
            ['name' => 'Диагональ экрана'],
            ['name' => 'Разрешение экрана'],
            ['name' => 'Процессор'],
            ['name' => 'Количество ядер'],
            ['name' => 'Тактовая частота'],
            ['name' => 'Объем оперативной памяти'],
            ['name' => 'Тип видеокарты'],
            ['name' => 'Емкость SSD'],
        ];

        $category = Category::create([
            'name' => 'Ноутбуки',
            'parent_id' => 1,
        ]);

        $category->attributes()->createMany($attributeData);

        $category = Category::create([
            'name' => 'Персональные компьютеры',
            'parent_id' => 1,
        ]);

        $category->attributes()->createMany($attributeData);

        $category = Category::create([
            'name' => 'Комплектующие',
            'parent_id' => null,
        ]);

        $attributeData = [
            ['name' => 'Тип'],
            ['name' => 'Назначение'],
            ['name' => 'Емкость'],
            ['name' => 'Интерфейс передачи данных'],
        ];

        $category = Category::create([
            'name' => 'Жесткие диски, SSD',
            'parent_id' => 4,
        ]);

        $category->attributes()->createMany($attributeData);

        $attributeData = [
            ['name' => 'Тип'],
            ['name' => 'Назначение'],
            ['name' => 'Емкость'],
            ['name' => 'Интерфейс передачи данных'],
        ];

        $category = Category::create([
            'name' => 'Оперативная память',
            'parent_id' => 4,
        ]);

        $category->attributes()->createMany($attributeData);
    }
}
