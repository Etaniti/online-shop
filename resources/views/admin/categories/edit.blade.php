@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <form action="{{ route('admin.categories.update', ['category' => $category->id]) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PATCH')
                <div class="card px-4 py-3 mt-5 mb-5">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Редактирование категории<br>"{{ $category->name }}"</h3>

                        <div class="mb-4 row">
                            <label for="name" class="col-form-label fw-bold">Название</label>
                            <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="row">
                            <button type="submit" class="btn btn-outline-primary p-3">
                                Сохранить
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
