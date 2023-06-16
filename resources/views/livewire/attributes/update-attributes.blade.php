<div class="container">
    <div class="d-flex flex-column justify-content-start">
        <div>
            @if(!$showInputs)
                <button wire:click="$set('showInputs', true)" class="btn btn-outline-primary btn-sm">Редактировать
                </button>
                <button class="btn btn-outline-danger btn-sm">Удалить
                </button>
            @endif
        </div>
        <form wire:submit.prevent="update" action="{{ route('admin.attributes.update', ['attribute' => $attribute]) }}" enctype="multipart/form-data"
              method="POST">
            @csrf
            @method('PATCH')
            <div>
                @if($showInputs)
                    <div class="mt-2 mb-4 row">
                        <input type="text" class="form-control" wire:model="name" placeholder="Введите новое название">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="d-flex flex-sm-row mt-3">
                            <button id="saveButton" type="submit" class="btn btn-primary me-1">
                                Сохранить
                            </button>
                            <button wire:click="$set('showInputs', false)" type="submit"
                                    class="btn btn-outline-secondary">Отмена
                            </button>
                        </div>
                    </div>
                @endif
            </div>
        </form>
    </div>
</div>
<script src="{{ mix('js/reload-page.js') }}"></script>
