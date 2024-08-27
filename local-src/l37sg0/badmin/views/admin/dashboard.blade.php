@extends('admin::admin.admin')

@section('content_header')
    @parent
    @include('admin::admin.components.page-header')
@endsection

@section('content_body')
    @parent
    @include('admin::admin.components.chart')
    @include('admin::admin.components.table')
@endsection

@section('page_js')
    @parent
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js"
            integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp"
            crossorigin="anonymous"></script>
@endsection
