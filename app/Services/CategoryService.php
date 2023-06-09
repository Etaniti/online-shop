<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    /**
     * Store a newly created resource in storage.
     *
     * @param array $categoryArray
     * @return Category
     */
    public function store(array $categoryArray): Category
    {
        return $category = Category::create($categoryArray);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param array $categoryArray
     * @param int $categoryId
     * @return bool
     */
    public function update(array $categoryArray, int $categoryId): bool
    {
        return $category = Category::findOrFail($categoryId)->update($categoryArray);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $categoryId
     * @return bool
     */
    public function destroy(int $categoryId): bool
    {
        return $category = Category::destroy($categoryId);
    }
}
