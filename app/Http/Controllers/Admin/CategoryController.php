<?php

namespace App\Http\Controllers\Admin;

use App\Dto\CategoryDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CategoryController extends Controller
{
    private CategoryService $categoryService;

    /**
     * Instantiate a new controller instance.
     *
     * @param CategoryService $categoryService
     */
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $categories = Category::paginate(20);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryRequest $request
     * @return RedirectResponse
     */
    public function store(CategoryRequest $request): RedirectResponse
    {
        $categoryDto = new CategoryDto($request['name']);
        $categoryArray = $categoryDto->toArray($categoryDto->getName());
        $categoryService = $this->categoryService->store($categoryArray);
        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return View
     */
    public function show(Category $category): View
    {
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return View
     */
    public function edit(Category $category): View
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryRequest $request
     * @param Category $category
     * @return RedirectResponse
     */
    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {
        $categoryId = $category->id;
        $categoryDto = new CategoryDto($request['name']);
        $categoryArray = $categoryDto->toArray($categoryDto->getName());
        $categoryService = $this->categoryService->update($categoryArray, $categoryId);
        return redirect()->route('admin.categories.show', ['category' => $categoryId]);
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param Category $category
     * @return View
     */
    public function delete(Category $category): View
    {
        return view('admin.categories.delete', compact('category'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return RedirectResponse
     */
    public function destroy(Category $category): RedirectResponse
    {
        $categoryId = $category->id;
        $categoryService = $this->categoryService->destroy($categoryId);
        return redirect()->route('admin.categories.index');
    }
}
