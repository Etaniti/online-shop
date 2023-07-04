@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flew-column mt-5 offset-2">
            <div class="d-flex flex-row justify-content-between align-items-center mt-5">
                <h2>Вариант товара <a
                        href="{{ route('admin.products.show', ['product' => $productVariant->product_id]) }}">{{ $productVariant->product->name }}</a>
                    "{{ $productVariant->name }}"</h2>
                <a href="{{ route('admin.product-variants.edit', ['product_variant' => $productVariant->id]) }}"
                   class="text-primary ms-4">Редактировать</a>
                <a href="{{ route('admin.product-variants.delete', ['product_variant' => $productVariant->id]) }}"
                   class="text-danger ms-2">Удалить</a>
            </div>
        </div>
        <div class="d-flex flex-row mt-3 offset-2">
            <div>
{{--                @foreach($photos as $photo)--}}
{{--                    <img src="{{ asset($productVariant->getImageLink($photo)) }}" alt="Изображение">--}}
{{--                @endforeach--}}
            </div>
            <div>
                <h5 class="text-muted">Описание:</h5>
                <p class="col-md-8 mb-3">{{ $productVariant->description }}</p>
                <h5 class="mb-3"><span class="text-muted">СКУ:</span> {{ $productVariant->sku }}</h5>
                <h5 class="mb-3"><span class="text-muted">Артикул:</span> {{ $productVariant->article }}</h5>
                <h5 class="mb-3"><span class="text-muted">Цена:</span> {{ $productVariant->price }}</h5>
            </div>
        </div>
        <div class="mt-3 offset-2">
            @livewire('product-variant-features.show-product-variant-features', ['productVariant' => $productVariant])
        </div>
    </div>
@endsection
