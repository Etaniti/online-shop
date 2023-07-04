<?php

namespace App\Dto;

class ProductVariantFeatureDto
{
    /**
     * @var int
     */
    private int $product_variant_id;

    /**
     * @var int
     */
    private int $attribute_id;

    /**
     * @var string
     */
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

    /**
     * Get the value of the property.
     *
     * @return int
     */
    public function getAttributeId(): int
    {
        return $this->attribute_id;
    }

    /**
     * Set the value of the property.
     *
     * @param int $attribute_id
     */
    public function setAttributeId(int $attribute_id): void
    {
        $this->attribute_id = $attribute_id;
    }

    /**
     * Get the value of the property.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Set the value of the property.
     *
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    /**
     * Get the array of property attributes.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'product_variant_id' => $this->product_variant_id,
            'attribute_id' => $this->attribute_id,
            'value' => $this->value,
        ];
    }
}
