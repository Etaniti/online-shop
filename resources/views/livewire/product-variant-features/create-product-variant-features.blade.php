<div class="container">
    <div class="d-flex flex-column justify-content-start">
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
        @foreach($attributes as $attribute)
            <div class="d-flex flex-sm-row mb-2">
                <h5 class="text-muted me-3">{{ $attribute->name }}:</h5>
                @if($showInputs)
                    <form wire:submit.prevent="store"
                          action="{{ route('admin.product-variant-features.store', ['product_variant' => $productVariant->id]) }}"
                          enctype="multipart/form-data"
                          method="POST">
                        @csrf
                        <div>
                            <div class="d-flex flex-sm-row mb-4">
                                <div>
                                    <input type="text" class="form-control" wire:model="name"
                                           placeholder={{ $productVariantFeature ?? "Значение" }} value="{{ old('name') }}">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button id="saveButton" type="submit"
                                        class="btn btn-primary col-4 ms-2">
                                    Сохранить
                                </button>
                            </div>
                        </div>
                    </form>
                @endif
            </div>
        @endforeach
    </div>
</div>
<script src="{{ mix('js/reload-page.js') }}"></script>
