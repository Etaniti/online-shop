<div class="container">
    <div class="d-flex flex-column justify-content-start">
        <div class="mb-1">
            <div class="d-flex flex-sm-row align-items-center mb-3">
                <h4 class="text-decoration-underline me-2">Характеристики</h4>
                <button wire:click="$set('showUpdateInputs', true)"
                        class="btn btn-outline-secondary btn-sm text-decoration-underline border border-0">Изменить
                </button>
                @if ($showUpdateInputs)
                    <button wire:click="$set('showUpdateInputs', false)"
                            class="btn btn-outline-danger btn-sm text-decoration-underline border border-0">Отмена
                    </button>
                @endif
            </div>
            @foreach($category->attributes as $attribute)
                <h5 class="mt-3 me-4">
                    {{ $attribute->name }}
                </h5>
                @if($showUpdateInputs)
                    @livewire('attributes.update-attributes', ['category' => $category, 'attribute' => $attribute->id])
                @endif
            @endforeach
        </div>
        <div>
            @if(!$showCreateInputs && !$showUpdateInputs)
                <button wire:click="$set('showCreateInputs', true)" class="row btn btn-outline-primary px-5 py-2 mt-3">
                    Добавить
                </button>
            @endif
        </div>
        <form wire:submit.prevent="store" action="{{ route('admin.attributes.store', ['category' => $category]) }}" enctype="multipart/form-data"
              method="POST">
            @csrf
            <div>
                @if($showCreateInputs)
                    <div class="mb-4 row">
                        <input type="text" class="form-control" wire:model="name" placeholder="Название" value="{{ old('name') }}">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="row">
                            <button id="saveButton" type="submit" class="btn btn-primary col-4 py-2 me-2 mt-3">
                                Сохранить
                            </button>
                            <button wire:click="$set('showCreateInputs', false)"
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
