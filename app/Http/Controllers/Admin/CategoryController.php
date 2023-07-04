<?php

namespace App\Http\Controllers\Admin;

use App\Dto\CategoryDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Attribute;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * @var CategoryService
     */
    private CategoryService $service;

    /**
     * Instantiate a new controller instance.
     *
     * @param CategoryService $service
     */
    public function __construct(CategoryService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $categories = Category::where('parent_id', NULL)->orderBy('name')->paginate(20);
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
        $dto = new CategoryDto($request['name'], $request['parent_id']);
        $this->service->store($dto);
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
        $parentCategory = Category::find($category->parent_id);
        return view('admin.categories.show', compact('category', 'parentCategory'));
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
        $dto = new CategoryDto($request['name'], $category->parent_id);
        $this->service->update($dto, $category->id);
        return redirect()->route('admin.categories.show', ['category' => $category->id]);
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
        $this->service->destroy($category->id);
        return redirect()->route('admin.categories.index');
    }
}
