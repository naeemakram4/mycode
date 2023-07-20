@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('content')
    <form method="POST" action="{{ route('add_product_data') }}" enctype="multipart/form-data" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
        @csrf
        @include('admin.product.index.components.create_form_aside')
        @include('admin.product.index.components.create_form_content')
    </form>
@endsection
