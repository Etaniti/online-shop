<?php

namespace App\Http\Controllers\Admin;

use App\Dto\CategoryDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\Categories\CreateCategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
     * @param CreateCategoryRequest $request
     * @return RedirectResponse
     */
    public function store(CreateCategoryRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $categoryDto = new CategoryDto($data['name']);
        $categoryArray = $categoryDto->toArray($data['name']);
        $categoryService = $this->categoryService->store($categoryArray);
        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Category $abstractProduct
     * @return \Illuminate\Http\Response
     */
    public function show(Category $abstractProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Category $abstractProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $abstractProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Category $abstractProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $abstractProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Category $abstractProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $abstractProduct)
    {
        //
    }
}
