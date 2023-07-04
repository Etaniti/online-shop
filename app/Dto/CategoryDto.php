<?php

namespace App\Dto;

class CategoryDto
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var int|null
     */
    private ?int $parent_id;

    /**
     * Create a new DTO instance.
     *
     * @param string $name
     * @param int|null $parent_id
     */
    public function __construct(string $name, ?int $parent_id)
    {
        $this->name = $name;
        $this->parent_id = $parent_id;
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
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parent_id;
    }

    /**
     * Set the value of the property.
     *
     * @param int|null $parent_id
     */
    public function setParentId(?int $parent_id): void
    {
        $this->parent_id = $parent_id;
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
            'parent_id' => $this->parent_id,
        ];
    }
}
