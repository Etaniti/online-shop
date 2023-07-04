<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Product::create([
            'category_id' => '2',
            'name' => 'Ноутбук Dell Latitude 3520 (3520-3368)',
            'producer' => 'DELL',
        ]);

        $productVariant = ProductVariant::create([
            'product_id' => '1',
            'name' => 'Ноутбук Dell Latitude 3520 черный (3520-3368)',
            'description' => 'Этот ноутбук Dell Latitude 15 3520-3368 создан для тех, кто хочет получить хорошее производительное компьютерное устройство с наиболее востребованным функционалом. Данная модель полностью удовлетворяет данные требования. Надежный накопитель предоставляет вам возможности для долговременного хранения необходимой виртуальной информации. Устройство оборудовано веб-камерой и микрофоном, благодаря которым вы сможете организовывать видеоконференции с партнерами по бизнесу и коллегами по работе.',
            'photos' => 'a:2:{i:0;s:51:"images/dPioL81k7YWo0VoEbtIQzDjINKgrgj4MdUv8VI50.jpg";i:1;s:51:"images/go6uVPNbKmxTpOZRtnDttZPCh8BCCwOrb3mrVisW.jpg";}',
            'sku' => 'DELL352033681',
            'article' => '11084981',
            'price' => '3046.61 ',
        ]);

        $features = [
            [
                'product_variant_id' => $productVariant->id,
                'attribute_id' => '1',
                'value' => '',
            ],
            [
                'product_variant_id' => $productVariant->id,
                'attribute_id' => '2',
                'value' => '',
            ],
            [
                'product_variant_id' => $productVariant->id,
                'attribute_id' => '3',
                'value' => '',
            ],
            [
                'product_variant_id' => $productVariant->id,
                'attribute_id' => '4',
                'value' => '',
            ],
            [
                'product_variant_id' => $productVariant->id,
                'attribute_id' => '5',
                'value' => '',
            ],
            [
                'product_variant_id' => $productVariant->id,
                'attribute_id' => '6',
                'value' => '',
            ],
            [
                'product_variant_id' => $productVariant->id,
                'attribute_id' => '7',
                'value' => '',
            ],
            [
                'product_variant_id' => $productVariant->id,
                'attribute_id' => '8',
                'value' => '',
            ],
            [
                'product_variant_id' => $productVariant->id,
                'attribute_id' => '9',
                'value' => '',
            ],
            [
                'product_variant_id' => $productVariant->id,
                'attribute_id' => '10',
                'value' => '',
            ],
            [
                'product_variant_id' => $productVariant->id,
                'attribute_id' => '11',
                'value' => '',
            ],
        ];


        $productVariant->productVariantFeatures()->createMany($features);

        $productVariant = ProductVariant::create([
            'product_id' => '1',
            'name' => 'Ноутбук Dell Latitude 3520 серый (3520-3368)',
            'description' => 'Этот ноутбук Dell Latitude 15 3520-3368 создан для тех, кто хочет получить хорошее производительное компьютерное устройство с наиболее востребованным функционалом. Данная модель полностью удовлетворяет данные требования. Надежный накопитель предоставляет вам возможности для долговременного хранения необходимой виртуальной информации. Устройство оборудовано веб-камерой и микрофоном, благодаря которым вы сможете организовывать видеоконференции с партнерами по бизнесу и коллегами по работе.',
            'photos' => 'a:2:{i:0;s:51:"images/dPioL81k7YWo0VoEbtIQzDjINKgrgj4MdUv8VI50.jpg";i:1;s:51:"images/go6uVPNbKmxTpOZRtnDttZPCh8BCCwOrb3mrVisW.jpg";}',
            'sku' => 'DELL352033682',
            'article' => '11084982',
            'price' => '3046.61 ',
        ]);

        $productVariant->productVariantFeatures()->createMany($features);
    }
}
