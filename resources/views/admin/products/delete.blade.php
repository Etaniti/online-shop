@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flew-column mt-5 offset-2">
            <form action="{{ route('admin.products.destroy', ['product' => $product->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="mt-5">
                    <h4>Вы действительно хотите удалить товар "{{ $product->name }}"?</h4>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-danger d-inline-block px-4 py-2">Удалить</button>
                        <a href="{{ route('admin.products.show', ['product' => $product->id]) }}" class="btn btn-outline-secondary d-inline-block px-4 py-2 ms-2">Отмена</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
