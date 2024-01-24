@extends('layouts.app')
@section('pageTitle', $pageTitle)

@section('content')
    @include('customer.dashboard.components.row1')
    @include('customer.dashboard.components.row2')
    @include('customer.dashboard.components.row3')
@endsection
