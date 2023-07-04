<?php

namespace App\Http\Livewire\ProductVariantFeatures;

use App\Models\ProductVariant;
use App\Models\ProductVariantFeature;
use Illuminate\View\View;
use Livewire\Component;
use App\Dto\ProductVariantFeatureDto;
use App\Services\ProductVariantFeatureService;

class UpdateProductVariantFeatures extends Component
{
    /**
     * @var bool
     */
    public bool $showInputs = false;

    /**
     * @var ProductVariantFeature
     */
    public ProductVariantFeature $productVariantFeature;

    /**
     * @var string
     */
    public string $value;

    /**
     * @var array|array[]
     */
    protected array $rules = [
        'value' => ['required', 'string', 'max:255'],
    ];

    /**
     * Render the Livewire component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('livewire.product-variant-features.update-product-variant-features');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductVariantFeatureService $service
     * @return void
     */
    public function update(ProductVariantFeatureService $service)
    {
        $data = $this->validate();
        $dto = new ProductVariantFeatureDto(
            $this->productVariantFeature['product_variant_id'],
            $this->productVariantFeature['attribute_id'],
            $data['value'],
        );
        $service->update($dto, $this->productVariantFeature['id']);
        $this->dispatchBrowserEvent('refresh-page');
    }
}
