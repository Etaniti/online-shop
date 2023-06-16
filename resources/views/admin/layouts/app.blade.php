@extends('layouts.app')

@section('sidebar')
    <div>
        <div class="d-flex flex-column bg-white shadow-sm p-3 mt-2" style="width: 15%; height: 100%; position: fixed">
            <ul class="nav nav-pills flex-column mt-3">
                <li value="films" class="nav-item row mx-2 mb-3">
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-primary text-start">
                        Каталог товаров
                    </a>
                </li>
                <li value="schedule" class="nav-item row mx-2 mb-3">
                    <a href="#" class="btn btn-outline-primary text-start">
                        Пункты выдачи
                    </a>
                </li>
                <li value="cinema-halls" class="nav-item row mx-2 mb-3">
                    <a href="#" class="btn btn-outline-primary text-start">
                        Склад
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection
