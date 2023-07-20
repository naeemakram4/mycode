@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('content')
    <form method="POST" action="{{ route('add_replacement_order_data') }}" class="form d-flex flex-column flex-lg-row">
        @csrf

        @include('admin.replacement.components.create.aside')
        @include('admin.replacement.components.create.content')

    </form>
@endsection

@push('pageInnerScript')
    <script>
        $("#orderDate").flatpickr();
    </script>
@endpush
