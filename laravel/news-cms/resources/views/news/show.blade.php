@php use App\Models\News;use App\Models\Tag; @endphp
@php /** @var News $newsItem */ @endphp
@php /** @var Tag $tag */ @endphp
@extends('layouts.app')

{{--@section('meta_title', $newsItem->title)--}}
{{--@section('meta_description', Str::limit(strip_tags($newsItem->content), 150))--}}
{{--@section('meta_keywords', 'технологии, новини, AI, Big Data, Web3, криптовалути, ' . $newsItem->title)--}}
{{--@section('meta_image', url('/images/news/' . ($newsItem->image ?? 'default.jpg')))--}}

@section('meta_title', $newsItem->title)
@section('meta_description', Str::limit(strip_tags($newsItem->content), 150))
@section('meta_keywords', implode(',', $newsItem->tags->pluck('name')->toArray()))
@section('meta_image', asset('storage/' . $newsItem->image))


@section('content')
    <h1>{{ $newsItem->title }}</h1>
    <p>Тагове:
        @foreach($newsItem->tags as $tag)
            <a href="{{ route('news.tag', $tag->slug) }}" class="badge bg-primary">{{ $tag->name }}</a>
        @endforeach
    </p>
    <p>{!! nl2br($newsItem->content) !!}</p>
    <a href="/" class="btn btn-primary">⬅ Назад</a>
@endsection
