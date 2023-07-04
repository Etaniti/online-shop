<div class="container">
    <div class="d-flex flex-column justify-content-start">
        <form wire:submit.prevent="delete"
              action="{{ route('admin.attributes.destroy', ['attribute' => $attribute]) }}"
              enctype="multipart/form-data"
              method="POST">
            @csrf
            @method('DELETE')
            <div>
                <div class="d-flex flex-sm-row">
                    <button id="saveButton" type="submit" class="btn btn-danger px-4">
                        Удалить
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
