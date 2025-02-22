@extends('layouts.app')

@section('meta_title', $newsItem->title)
@section('meta_description', Str::limit(strip_tags($newsItem->content), 150))
@section('meta_keywords', 'технологии, новини, AI, Big Data, Web3, криптовалути, ' . $newsItem->title)
@section('meta_image', url('/images/news/' . ($newsItem->image ?? 'default.jpg')))

@section('content')
    <h1>{{ $newsItem->title }}</h1>
    <p>{!! nl2br(e($newsItem->content)) !!}</p>
    <a href="/" class="btn btn-primary">⬅ Назад</a>
@endsection
