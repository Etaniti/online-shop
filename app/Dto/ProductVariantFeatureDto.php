<?php

namespace App\Dto;

class ProductVariantFeatureDto
{
    private int $product_variant_id;
    private int $attribute_id;
    private string $value;

    /**
     * Create a new Dto
     *
     * @param int $product_variant_id
     * @param int $attribute_id
     * @param string $value
     */
    public function __construct(int $product_variant_id, int $attribute_id, string $value)
    {
        $this->product_variant_id = $product_variant_id;
        $this->attribute_id = $attribute_id;
        $this->value = $value;
    }


}
