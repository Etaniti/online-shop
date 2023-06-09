@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flew-column mt-5 offset-2">
            <div class="mt-5">
                <div class="d-flex flex-row justify-content-between align-items-center mt-4">
                    <h2>Категория "{{ $category->name }}"</h2>
                    <a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}" class="text-primary ms-4">Редактировать</a>
                    <a href="{{ route('admin.categories.delete', ['category' => $category->id]) }}" class="text-danger ms-2">Удалить</a>
                </div>
                <div class="mt-4">
                    <a href="#" class="btn btn-primary px-5 py-3 me-3">Добавить характиристики</a>
                </div>
            </div>
        </div>
    </div>
@endsection
