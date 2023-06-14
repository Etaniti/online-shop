<div class="container">
    <div class="d-flex flex-column justify-content-start">
        <div>
            <button wire:click="$set('showInputs', true)" class="row btn btn-outline-primary px-5 py-2">Добавить
            </button>
        </div>
        <form wire:submit.prevent="store" action="{{ route('admin.attributes.store') }}" enctype="multipart/form-data"
              method="POST">
            @csrf
            <div>
                @if($showInputs)
                    <div class="mt-4 mb-4 row">
{{--                        <input type="text" class="form-control" wire:model="category_id" value="{{ $category->id }}" hidden>--}}
                        <input type="text" class="form-control" wire:model="name" placeholder="Название">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="row">
                            <button id="saveButton" type="submit" class="btn btn-primary col-4 py-2 me-2 mt-3">Сохранить</button>
                            <button wire:click="$set('showInputs', false)" type="submit" class="btn btn-outline-secondary col-4 py-2 mt-3">Отмена</button>
                        </div>
                    </div>
                @endif
            </div>
        </form>
    </div>
</div>
<script src="{{ mix('js/reload-page.js') }}"></script>
