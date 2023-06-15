<?php

namespace App\Services;

use App\Dto\ProductDto;
use App\Models\Product;

class ProductService
{
    public function store(ProductDto $productDto): Product
    {
        return Product::create($productDto->toArray());
    }
}
