@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flew-column mt-5 offset-2">
            <div class="d-flex flex-row justify-content-between align-items-center mt-5">
                <h2>Товар "{{ $product->name }}"</h2>
                <a href="{{ route('admin.products.edit', ['product' => $product->id]) }}"
                   class="text-primary ms-4">Редактировать</a>
                <a href="{{ route('admin.products.delete', ['product' => $product->id]) }}"
                   class="text-danger ms-2">Удалить</a>
            </div>
        </div>
        <div class="mt-2 offset-2">
            <h5><span class="text-muted">Производитель:</span> {{ $product->producer }}</h5>
        </div>
        <div class="d-flex flex-column mt-5 offset-2">
            <h3 class="mt-3 mb-3">Варианты товара</h3>
            <div>
                @foreach($product->productVariants as $productVariant)
                    <h4><a href="{{ route('admin.product-variants.show', ['product_variant' => $productVariant->id]) }}" class="text-primary">{{ $productVariant->name }}</a></h4>
                @endforeach
            </div>
            <a href="{{ route('admin.products.product-variants.create', ['product' => $product->id]) }}" class="btn btn-primary col-md-4 py-3 px-5 mt-4">
                Добавить вариант товара
            </a>
        </div>
    </div>
@endsection
