<?php

namespace App\Services;

use App\Models\Category;
use App\Dto\CategoryDto;

class CategoryService
{
    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryDto $dto
     * @return Category
     */
    public function store(CategoryDto $dto): Category
    {
        return Category::create($dto->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryDto $dto
     * @param int $categoryId
     * @return bool
     */
    public function update(CategoryDto $dto, int $categoryId): bool
    {
        return Category::findOrFail($categoryId)->update($dto->toArray());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $categoryId
     * @return bool
     */
    public function destroy(int $categoryId): bool
    {
        return Category::destroy($categoryId);
    }
}
