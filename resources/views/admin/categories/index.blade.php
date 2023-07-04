@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flew-column mt-5 offset-2">
            <div class="mt-5">
                <h2 class="mb-4">Категории товаров</h2>
                @foreach($categories as $category)
                    <div class="mb-5">
                        <div class="d-flex flex-sm-row align-items-center mt-3">
                            <h3>
                                {{--                            <a href="{{ route('admin.categories.show', ['category' => $category->id]) }}">--}}
                                {{--                                {{ $category->name }}</a>--}}
                                {{ $category->name }}
                            </h3>
                            <a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}"
                               class="text-primary ms-3">Редактировать</a>
                            <a href="{{ route('admin.categories.delete', ['category' => $category->id]) }}"
                               class="text-danger ms-2">Удалить</a>
                        </div>
                        <div class="ms-3">
                            @if($category->subcategories)
                                @foreach($category->subcategories as $subcategory)
                                    <div>
                                        <h4>
                                            <a href="{{ route('admin.categories.show', ['category' => $subcategory->id]) }}" class="text-dark">
                                                {{ $subcategory->name }}</a>
                                        </h4>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        @livewire('subcategories.create-subcategory', ['category' => $category])
                    </div>
                @endforeach
                <div class="my-5">
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-outline-primary px-5 py-3">Добавить
                        категорию</a>
                </div>
            </div>
        </div>
    </div>
@endsection
