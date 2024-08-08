@extends('admin::admin.base')


@section('page_header')
    @include('admin::admin.components.page-header')
@endsection
@section('page_body')

    @include('admin::admin.components.chart')
    @include('admin::admin.components.table')
@endsection
