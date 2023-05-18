<?php

namespace App\Dto;

class ProductItemDto
{
    private int $product_variant_id;

    /**
     * Create a new DTO instance.
     *
     * @param int $product_variant_id
     */
    public function __construct(int $product_variant_id)
    {
        $this->product_variant_id = $product_variant_id;
    }

    /**
     * Get the value of the property.
     *
     * @return int
     */
    public function getProductVariantId(): int
    {
        return $this->product_variant_id;
    }

    /**
     * Set the value of the property.
     *
     * @param int $product_variant_id
     */
    public function setProductVariantId(int $product_variant_id): void
    {
        $this->product_variant_id = $product_variant_id;
    }
}
