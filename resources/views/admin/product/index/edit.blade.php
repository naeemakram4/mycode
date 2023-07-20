@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('content')
    <form method="POST" action="{{ route('update.product', $product->id) }}" enctype="multipart/form-data" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
        @csrf
        @method('PUT')
        @include('admin.product.index.components.edit_form_aside')
        @include('admin.product.index.components.edit_form_content')
    </form>
@endsection
