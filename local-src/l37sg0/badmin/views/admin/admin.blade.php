@extends('admin::admin.base')

@section('page_css')
    @include('admin::admin.components.custom-icons')
@endsection

@section('page_header')
    @parent
    @include('admin::admin.components.color-scheme-button')
    @include('admin::admin.components.header')
@endsection

@section('page_body')
    @parent
    <div class="container-fluid">
        <div class="row">
            @include('admin::admin.components.sidebar')
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content_header')
                @yield('content_body')
            </main>

        </div>
    </div>
@endsection
