<div class="container">
    <div class="d-flex flex-column justify-content-start mb-5">
        <div class="d-flex flex-sm-row align-items-center mt-5 mb-3">
            <h3 class="me-3">Характеристики варианта товара</h3>
            <button wire:click="$set('showInputs', true)"
                    class="btn btn-outline-secondary btn-sm text-decoration-underline border border-0 me-1">Изменить
            </button>
            @if ($showInputs)
                <button wire:click="$set('showInputs', false)"
                        class="btn btn-outline-danger btn-sm text-decoration-underline border border-0">Отмена
                </button>
            @endif
        </div>
        @foreach($productVariantFeatures as $productVariantFeature)
            <div class="d-flex flex-sm-row mb-2">
                <h5 class="me-3"><span class="text-muted">{{ $productVariantFeature->attribute->name }}:</span> {{ $productVariantFeature->value ?? '' }}</h5>
                @if($showInputs)
                    @livewire('product-variant-features.update-product-variant-features', ['productVariantFeature' => $productVariantFeature])
                @endif
            </div>
        @endforeach
    </div>
</div>
<script src="{{ mix('js/reload-page.js') }}"></script>
