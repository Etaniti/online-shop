@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <form action="{{ route('admin.categories.products.store', ['category' => $category->id]) }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card px-4 py-3 mt-5 mb-5">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Добавление товара</h3>

                        <div class="mb-2 row">
                            <label for="name" class="col-form-label fw-bold">Название</label>
                            <input type="text" name="category_id" value="{{ $category->id }}" hidden />
                            <input type="text" class="form-control" name="name" value>
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4 row">
                            <label for="producer" class="col-form-label fw-bold">Производитель</label>
                            <input type="text" class="form-control" name="producer">
                            @error('producer')
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
