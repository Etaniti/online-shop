<?php

namespace App\Services;

use App\Dto\ProductDto;
use App\Models\Product;

class ProductService
{
    /**
     * Store a newly created resource in storage.
     *
     * @param ProductDto $dto
     * @return Product
     */
    public function store(ProductDto $dto): Product
    {
        return $product = Product::create($dto->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductDto $dto
     * @param int $productId
     * @return bool
     */
    public function update(ProductDto $dto, int $productId): bool
    {
        return Product::findOrFail($productId)->update($dto->toArray());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $productId
     * @return bool
     */
    public function delete(int $productId): bool
    {
        return Product::findOrFail($productId)->destroy($productId);
    }
}
