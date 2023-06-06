<?php

namespace App\Dto;

class CategoryDto
{
    /**
     * The name of the property.
     *
     * @var string
     */
    private string $name;

    /**
     * Create a new DTO instance.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
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

    public function toArray(string $name): array
    {
        return $categoryArray = [
            'name' => $this->name,
        ];
    }
}
