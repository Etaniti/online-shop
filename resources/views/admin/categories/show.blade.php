@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flew-column mt-5 offset-2">
            <div class="mt-5">
                <div class="d-flex flex-row justify-content-between align-items-center mt-4 mb-4">
                    <h2>Категория "{{ $category->name }}"</h2>
                    <a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}"
                       class="text-primary ms-4">Редактировать</a>
                    <a href="{{ route('admin.categories.delete', ['category' => $category->id]) }}"
                       class="text-danger ms-2">Удалить</a>
                </div>
                <div class="mb-4">
                    <h4 class="row text-decoration-underline ms-1 mb-4">Характеристики</h4>
                    @foreach($category->attributes as $attribute)
                        <h5 class="mt-3">
                            <a href="{{ route('admin.attributes.show', ['attribute' => $attribute->id]) }}" class="link-secondary">
                                {{ $attribute->name }}
                            </a>
                        </h5>
                    @endforeach
                </div>
                @livewire('attributes.create-multiple-attributes', ['category' => $category])
                <div class="mt-5">
                    <h4 class="text-decoration-underline">Товары</h4>
                    @foreach($category->products as $product)
                        <h5 class="mt-3">
                            <a href="{{ route('admin.products.show', ['product' => $product->id]) }}">
                                {{ $product->name }}
                            </a>
                        </h5>
                    @endforeach
                    <a href="{{ route('admin.categories.products.create', ['category' => $category]) }}"
                       class="btn btn-outline-primary px-5 py-2 mt-3">Добавить</a>
                </div>
            </div>
        </div>
    </div>
@endsection
