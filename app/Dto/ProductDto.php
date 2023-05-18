<?php

namespace App\Dto;

class ProductDto
{
    private int $abstract_product_id;
    private string $name;

    /**
     * Create a new DTO instance.
     *
     * @param int $abstract_product_id
     * @param string $name
     */
    public function __construct(int $abstract_product_id, string $name)
    {
        $this->abstract_product_id = $abstract_product_id;
        $this->name = $name;
    }

    /**
     * Get the value of the property.
     *
     * @return int
     */
    public function getAbstractProductId(): int
    {
        return $this->abstract_product_id;
    }

    /**
     * Set the value of the property.
     *
     * @param int $abstract_product_id
     * @return void
     */
    public function setAbstractProductId(int $abstract_product_id): void
    {
        $this->abstract_product_id = $abstract_product_id;
    }

    /**
     * Get the value of the property.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of the property.
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
