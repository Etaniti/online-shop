<?php

namespace App\Http\Livewire\ProductVariantFeatures;

use App\Models\Category;
use App\Models\ProductVariant;
use Illuminate\View\View;
use Livewire\Component;

class CreateProductVariantFeatures extends Component
{
    /**
     * @var bool
     */
    public bool $showInputs = false;

    /**
     * @var ProductVariant
     */
    public ProductVariant $productVariant;

    /**
     * Render the Livewire component.
     *
     * @return View
     */
    public function render(): View
    {
        $category = Category::find($this->productVariant->product->category->parent_id);
        $attributes = $category->attributes()->get();
        return view('livewire.product-variant-features.create-product-variant-features', compact('attributes'));
    }
}
