@extends('welcome')
@section('content')
    <main class="mt-6">
        <div class="grid gap-6 lg:grid-cols-1 lg:gap-8 cv-listing"></div>
        <div class="grid gap-6 lg:grid-cols-1 lg:gap-8 cv-content"></div>
        <div class="pagination">
            @include('components.pagination')
        </div>
    </main>

@endsection
@section('scripts')
    @include('components.cvs-crud-controller')
@endsection
