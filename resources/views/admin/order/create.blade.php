@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('content')
    <form method="POST" action="{{ route('add_order_data') }}" class="form d-flex flex-column flex-lg-row">
        @csrf

        @include('admin.order.components.create.aside')
        @include('admin.order.components.create.content')

    </form>
@endsection

@push('pageInnerScript')
    <script>
        $("#orderDate").flatpickr();

        $('#kt_docs_repeater_basic').repeater({
            initEmpty: false,
            defaultValues: {
                'text-input': 'foo'
            },

            show: function () {
                $(this).slideDown();
            },
            hide: function (deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });
    </script>
@endpush
