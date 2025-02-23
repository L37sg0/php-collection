@php use App\Models\News; @endphp
@php /** @var News $n */ @endphp
@extends('layouts.app')

@section('content')
    <h2>Резултати за: "{{ request('q') }}"</h2>

    @if($news->count())
        @foreach($news as $n)
            <h3><a href="{{ route('news.show', $n->slug) }}">{{ $n->title }}</a></h3>
            <p>{!! Str::limit(strip_tags($n->content), 150) !!}
            </p>
        @endforeach
        {{ $news->links() }}
    @else
        <p>Няма резултати.</p>
    @endif
@endsection
