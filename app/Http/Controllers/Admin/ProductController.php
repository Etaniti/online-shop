<?php

namespace App\Http\Controllers\Admin;

use App\Dto\ProductDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * @var ProductService
     */
    private ProductService $service;

    /**
     * Instantiate a new controller instance.
     *
     * @param ProductService $service
     */
    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductRequest $request
     * @return RedirectResponse
     */
    public function store(ProductRequest $request): RedirectResponse
    {
        $dto = new ProductDto($request['category_id'], $request['name'], $request['producer']);
        $this->service->store($dto);
        return redirect()->route('admin.categories.show', ['category' => $request['category_id']]);
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return View
     */
    public function show(Product $product): View
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return View
     */
    public function edit(Product $product): View
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductRequest $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function update(ProductRequest $request, Product $product): RedirectResponse
    {
        $dto = new ProductDto($request['category_id'], $request['name'], $request['producer']);
        $this->service->update($dto, $product->id);
        return redirect()->route('admin.products.show', ['product' => $product->id]);
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param Product $product
     * @return View
     */
    public function delete(Product $product): View
    {
        return view('admin.products.delete', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return RedirectResponse
     */
    public function destroy(Product $product): RedirectResponse
    {
        $categoryId = $product->category_id;
        $this->service->delete($product->id);
        return redirect()->route('admin.categories.show', ['category' => $categoryId]);
    }
}
