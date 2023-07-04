<?php

namespace App\Services;

use App\Dto\ProductVariantDto;
use App\Models\Category;
use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class ProductVariantService
{
    /**
     * Store a newly created resource in storage.
     *
     * @param ProductVariantDto $dto
     * @return Collection
     */
    public function store(ProductVariantDto $dto): Collection
    {
        $files = $dto->getPhotos();
        $paths = [];

        foreach ($files as $file)
        {
            $path = Storage::disk('public')->put('images', $file);
            $paths[] = $path;
        }

        $serializedPaths = serialize($paths);
        $data = $dto->toArray();
        $data['photos'] = $serializedPaths;
        $productVariant = ProductVariant::create($data);

        $features = [];

        $category = Category::find($productVariant->product->category->parent_id);
        $attributes = $category->attributes()->get();

        foreach ($attributes as $attribute) {
            $features[] = [
                'product_variant_id' => $productVariant->id,
                'attribute_id' => $attribute->id,
                'value' => '',
            ];
        }

        return $productVariant->productVariantFeatures()->createMany($features);
    }
}
