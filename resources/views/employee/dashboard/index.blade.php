@extends('layouts.employee')
@section('pageTitle', $pageTitle)

@section('content')
    @include('employee.dashboard.components.row1')
    @include('employee.dashboard.components.row2')
    @include('employee.dashboard.components.row3')
@endsection
