<div class="container">
    <div class="d-flex flex-sm-row mt-3">
        <button wire:click="$set('showInputs', true)" class="btn btn-primary">Добавить подкатегорию</button>
        @if($showInputs)
            <button wire:click="$set('showInputs', false)"
                    class="btn btn-outline-secondary ms-2">Отмена
            </button>
        @endif
    </div>
    @if($showInputs)
        <form wire:submit.prevent="store" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data"
              method="POST">
            @csrf
            <div class="ms-3">
                @if($showInputs)
                    <div class="row mt-4 mb-4">
                        <input type="text" class="form-control" wire:model="name" placeholder="Название" value="{{ old('name') }}">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                            <button id="saveButton" type="submit" class="btn btn-primary col-4 mt-3">
                                Сохранить
                            </button>
                    </div>
                @endif
            </div>
        </form>
    @endif
</div>
<script src="{{ mix('js/reload-page.js') }}"></script>
