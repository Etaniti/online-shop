<?php

namespace App\Services;

use App\Models\Category;
use App\Dto\CategoryDto;

class CategoryService
{
    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryDto $categoryDto
     * @return Category
     */
    public function store(CategoryDto $categoryDto): Category
    {
        return Category::create($categoryDto->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryDto $categoryDto
     * @param int $categoryId
     * @return bool
     */
    public function update(CategoryDto $categoryDto, int $categoryId): bool
    {
        return Category::findOrFail($categoryId)->update($categoryDto->toArray());
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
