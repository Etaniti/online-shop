@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flew-column mt-5 offset-2">
            <div class="mt-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Каталог
                                    товаров</a></li>
                            <li class="breadcrumb-item">{{ $parentCategory->name }}</li>
                            <li class="breadcrumb-item active">{{ $category->name }}</li>
                        </ol>
                    </ol>
                </nav>
                <div class="d-flex flex-row justify-content-between align-items-center mt-4 mb-4">
                    <h2>Категория "{{ $category->name }}"</h2>
                    <a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}"
                       class="text-primary ms-4">Редактировать</a>
                    <a href="{{ route('admin.categories.delete', ['category' => $category->id]) }}"
                       class="text-danger ms-2">Удалить</a>
                </div>
                @livewire('attributes.create-attributes', ['category' => $category])
                <div class="mt-5 mb-4">
                    <h4 class="row text-decoration-underline ms-2 mb-4">Товары</h4>
                    @foreach($category->products as $product)
                        <h5>
                            <a href="{{ route('admin.products.show', ['product' => $product->id]) }}"
                               class="link-primary ms-2">
                                {{ $product->name }}
                            </a>
                        </h5>
                    @endforeach
                </div>
                @livewire('products.create-products', ['category' => $category])
            </div>
        </div>
    </div>
@endsection
