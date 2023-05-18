<?php

namespace App\Dto;

class AttributeDto
{
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
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
