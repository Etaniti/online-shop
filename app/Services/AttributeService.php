<?php

namespace App\Services;

use App\Dto\AttributeDto;
use App\Models\Attribute;

class AttributeService
{
    /**
     * Store a newly created resource in storage.
     *
     * @param AttributeDto $dto
     * @return void
     */
    public function store(AttributeDto $dto): Attribute
    {
        return $attribute = Attribute::create($dto->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AttributeDto $dto
     * @param int $attributeId
     * @return bool
     */
    public function update(AttributeDto $dto, int $attributeId): bool
    {
        return Attribute::findOrFail($attributeId)->update($dto->toArray());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $attributeId
     * @return bool
     */
    public function delete(int $attributeId): bool
    {
        return Attribute::findOrFail($attributeId)->destroy($attributeId);
    }
}
