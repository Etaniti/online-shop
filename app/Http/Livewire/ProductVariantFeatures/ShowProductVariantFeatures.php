<?php

namespace App\Http\Livewire\ProductVariantFeatures;

use App\Models\ProductVariant;
use App\Models\ProductVariantFeature;
use Illuminate\View\View;
use Livewire\Component;

class ShowProductVariantFeatures extends Component
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
     * @var string
     */
    public string $value;

    /**
     * Render the Livewire component.
     *
     * @return View
     */
    public function render(): View
    {
        $productVariantFeatures = ProductVariantFeature::where('product_variant_id', $this->productVariant->id)->with('attribute')->get();
        return view('livewire.product-variant-features.show-product-variant-features', compact('productVariantFeatures'));
    }
}
