<?php

namespace App\Dto;

class ProductDto
{
    private int $category_id;
    private string $name;

    /**
     * Create a new DTO instance.
     *
     * @param int $category_id
     * @param string $name
     */
    public function __construct(int $category_id, string $name)
    {
        $this->category_id = $category_id;
        $this->name = $name;
    }

    /**
     * Get the value of the property.
     *
     * @return int
     */
    public function getAbstractProductId(): int
    {
        return $this->category_id;
    }

    /**
     * Set the value of the property.
     *
     * @param int $category_id
     * @return void
     */
    public function setAbstractProductId(int $category_id): void
    {
        $this->category_id = $category_id;
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
