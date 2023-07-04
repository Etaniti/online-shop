<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductVariantRequest;
use App\Models\ProductVariant;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Services\ProductVariantService;
use App\Dto\ProductVariantDto;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class ProductVariantController extends Controller
{
    /**
     * @var ProductVariantService
     */
    private ProductVariantService $service;

    /**
     * Instantiate a new controller instance.
     *
     * @param ProductVariantService  $service
     */
    public function __construct(ProductVariantService $service)
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
     * @param Product  $product
     * @return View
     */
    public function create(Product $product): View
    {
        $attributes = $product->category->attributes()->get();
        return view('admin.product-variants.create', compact('product', 'attributes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProductVariantRequest  $request
     * @return RedirectResponse
     */
    public function store(ProductVariantRequest $request): RedirectResponse
    {
        $dto = new ProductVariantDto(
            $request->route('product'),
            $request['name'],
            $request['description'],
            $request->file('photos'),
            $request['sku'],
            $request['article'],
            $request['price'],
        );
        $this->service->store($dto);
        return redirect()->route('admin.products.show', ['product' => $request->route('product')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  ProductVariant  $productVariant
     * @return View
     */
    public function show(ProductVariant $productVariant): View
    {
        $photos = unserialize($productVariant->photos);
        $attributes = $productVariant->product->category->attributes()->get();
        return view('admin.product-variants.show', compact('productVariant', 'photos', 'attributes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductVariant  $productVariant
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductVariant $productVariant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductVariant  $productVariant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductVariant $productVariant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductVariant  $productVariant
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductVariant $productVariant)
    {
        //
    }
}
