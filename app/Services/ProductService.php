<?php

namespace App\Services;

use App\Dto\ProductDto;
use App\Models\Product;

class ProductService
{
    /**
     * Store a newly created resource in storage.
     *
     * @param ProductDto $productDto
     * @return Product
     */
    public function store(ProductDto $productDto): Product
    {
        return Product::create($productDto->toArray());
    }
}
