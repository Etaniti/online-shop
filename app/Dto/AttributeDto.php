<?php

namespace App\Dto;

class AttributeDto
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var int
     */
    private int $category_id;

    /**
     * Create a new DTO instance.
     *
     * @param string $name
     * @param int $category_id
     */
    public function __construct(string $name, int $category_id)
    {
        $this->name = $name;
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
     */
    public function setName(string $name): void
    {
        $this->name = $name;
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
     */
    public function setCategoryId(int $category_id): void
    {
        $this->category_id = $category_id;
    }

    /**
     * Get the array of property attributes.
     *
     * @return array[]
     */
    public function toArray(): array
    {
        return [
            'name' => $this->name,
        ];
    }
}
