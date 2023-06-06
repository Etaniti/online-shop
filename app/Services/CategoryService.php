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
}
