<div class="container">
    <div class="d-flex flex-column justify-content-start">
        <div>
            @if(!$showInputs)
                <button wire:click="$set('showInputs', true)" class="row btn btn-outline-primary px-5 py-2 mb-5">Добавить
                </button>
            @endif
        </div>
        <form wire:submit.prevent="store" action="{{ route('admin.products.store', ['category' => $category->id]) }}"
              enctype="multipart/form-data"
              method="POST">
            @csrf
            <div>
                @if($showInputs)
                    <div class="mb-4 row">
                        <div class="mb-2">
                            <input type="text" class="form-control" wire:model="name" placeholder="Название" value="{{ old('name') }}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <input type="text" class="form-control" wire:model="producer" placeholder="Производитель" value="{{ old('producer') }}">
                            @error('producer')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="row">
                            <button id="saveButton" type="submit" class="btn btn-primary col-4 py-2 me-2 mt-3">
                                Сохранить
                            </button>
                            <button wire:click="$set('showInputs', false)" type="submit"
                                    class="btn btn-outline-secondary col-4 py-2 mt-3">Отмена
                            </button>
                        </div>
                    </div>
                @endif
            </div>
        </form>
    </div>
</div>
<script src="{{ mix('js/reload-page.js') }}"></script>
