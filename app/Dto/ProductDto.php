<?php

namespace App\Dto;

class ProductDto
{
    /**
     * @var int
     */
    private int $category_id;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $producer;

    /**
     * Create a new DTO instance.
     *
     * @param int $category_id
     * @param string $name
     * @param string $producer
     */
    public function __construct(int $category_id, string $name, string $producer)
    {
        $this->category_id = $category_id;
        $this->name = $name;
        $this->producer = $producer;
    }

    /**
     * Get the value of the property.
     *
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    /**
     * Set the value of the property.
     *
     * @param int $category_id
     * @return void
     */
    public function setCategoryId(int $category_id): void
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

    /**
     * Get the value of the property.
     *
     * @return string
     */
    public function getProducer(): string
    {
        return $this->producer;
    }

    /**
     * Set the value of the property.
     *
     * @param string $producer
     * @return void
     */
    public function setProducer(string $producer): void
    {
        $this->producer = $producer;
    }

    /**
     * Get the array of property attributes.
     *
     * @return array[]
     */
    public function toArray(): array
    {
        return [
            'category_id' => $this->category_id,
            'name' => $this->name,
            'producer' => $this->producer,
        ];
    }
}
