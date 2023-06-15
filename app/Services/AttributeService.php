<?php

namespace App\Services;

use App\Dto\AttributeDto;
use App\Models\Attribute;

class AttributeService
{
    /**
     * Store a newly created resource in storage.
     *
     * @param AttributeDto $attributeDto
     * @return void
     */
    public function store(AttributeDto $attributeDto): void
    {
        $attribute = Attribute::create($attributeDto->toArray());
        $attribute->categories()->attach($attributeDto->getCategoryId());
    }
}
