<div class="container">
    <form wire:submit.prevent="update"
          action="{{ route('admin.product-variant-features.update', ['product_variant_feature' => $productVariantFeature->id]) }}"
          enctype="multipart/form-data"
          method="POST">
        @csrf
        @method('PATCH')
        <div>
            <div class="d-flex flex-sm-row mb-4">
                <div>
                    <input type="text" class="form-control" wire:model="value">
                    @error('value')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button id="saveButton" type="submit"
                        class="btn btn-outline-primary ms-2">
                    Сохранить
                </button>
            </div>
        </div>
    </form>
</div>
<script src="{{ mix('js/reload-page.js') }}"></script>
