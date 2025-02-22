@extends('layouts.app')

@section('content')
    <h2>Резултати за: "{{ request('q') }}"</h2>

    @if($news->count())
        @foreach($news as $n)
            <h3><a href="{{ route('news.show', $n->slug) }}">{{ $n->title }}</a></h3>
            <p>{{ Str::limit($n->content, 200) }}</p>
        @endforeach
        {{ $news->links() }}
    @else
        <p>Няма резултати.</p>
    @endif
@endsection
