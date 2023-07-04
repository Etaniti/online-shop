<?php

namespace App\Services;

use App\Dto\ProductVariantFeatureDto;
use App\Models\ProductVariantFeature;

class ProductVariantFeatureService
{
    public function update(ProductVariantFeatureDto $dto, int $productVariantFeatureId)
    {
        return ProductVariantFeature::findOrFail($productVariantFeatureId)->update($dto->toArray());
    }
}
