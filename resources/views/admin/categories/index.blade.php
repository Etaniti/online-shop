@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flew-column mt-5 offset-2">
            <div class="mt-5">
                <h2 class="mb-3">Категории товаров</h2>
                @foreach($categories as $category)
                    <h5>{{ $category->name }}</h5>
                @endforeach
                <div class="mt-5">
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary px-5 py-3">Добавить категорию</a>
                </div>
            </div>
        </div>
    </div>
@endsection
