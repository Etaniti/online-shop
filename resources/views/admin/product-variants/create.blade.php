@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <form action="{{ route('admin.products.product-variants.store', ['product' => $product->id]) }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card px-4 py-3 mt-5 mb-5">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Добавление варианта товара<br>"{{ $product->name }}"</h3>

                        <div class="mb-3 row">
                            <label for="name" class="col-form-label fw-bold">Название</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 row">
                            <label for="description" class="col-form-label fw-bold">Описание</label>
                            <textarea type="text" class="form-control" name="description" rows="5" value="{{ old('description') }}"></textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 row">
                            <label for="photos" class="col-form-label fw-bold">Фотографии</label>
                            <input type="file" class="form-control" name="photos[]" value="{{ old('photos') }}" multiple>
                            @error('photos')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 row">
                            <label for="sku" class="col-form-label fw-bold">СКУ</label>
                            <input type="text" class="form-control" name="sku" value="{{ old('sku') }}">
                            @error('sku')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 row">
                            <label for="article" class="col-form-label fw-bold">Артикул</label>
                            <input type="text" class="form-control" name="article" value="{{ old('article') }}">
                            @error('article')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4 row">
                            <label for="price" class="col-form-label fw-bold">Цена</label>
                            <input type="text" class="form-control" name="price" value="{{ old('price') }}">
                            @error('price')
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
