@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('content')
    <form method="POST" action="{{ route('update.order', $order->id) }}" class="form d-flex flex-column flex-lg-row">
        @csrf
        @method('PUT')

        @include('admin.order.components.edit.aside')
        @include('admin.order.components.edit.content')
    </form>
@endsection

@push('pageInnerScript')
    <script>
        $("#orderDate").flatpickr();
    </script>
@endpush
