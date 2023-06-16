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
    public function store(AttributeDto $attributeDto): Attribute
    {
        return $attribute = Attribute::create($attributeDto->toArray());
//        $attribute->categories()->attach($attributeDto->getCategoryId());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AttributeDto $attributeDto
     * @param int $attributeId
     * @return bool
     */
    public function update(AttributeDto $attributeDto, int $attributeId): bool
    {
        return Attribute::findOrFail($attributeId)->update($attributeDto->toArray());
    }
}
