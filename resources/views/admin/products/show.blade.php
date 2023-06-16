@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flew-column mt-5 offset-2">
            <div class="mt-5">
                <div class="d-flex flex-row justify-content-between align-items-center mt-4 mb-4">
                    <h2>Товар "{{ $product->name }}"</h2>
                </div>
            </div>
        </div>
    </div>
@endsection
