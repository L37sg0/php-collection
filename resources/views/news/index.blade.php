@extends('layouts.app')

@section('title', 'Последни новини')

@section('content')
    <h1>Последни новини</h1>
    <div class="list-group">
        @foreach ($news as $item)
            <a href="{{ url('/news/' . $item->slug) }}" class="list-group-item list-group-item-action">
                <h5>{{ $item->title }}</h5>
                <small class="text-muted">Категория: {{ $item->category->title ?? 'Без категория' }}</small>
                <p>{{ Str::limit($item->content, 150) }}</p>
            </a>
        @endforeach
    </div>

    {{ $news->links() }}
@endsection
