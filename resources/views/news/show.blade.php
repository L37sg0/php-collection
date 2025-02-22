@extends('layouts.app')

@section('title', $newsItem->title)

@section('content')
    <h1>{{ $newsItem->title }}</h1>
    <p>{!! nl2br(e($newsItem->content)) !!}</p>
    <a href="/" class="btn btn-primary">⬅ Назад</a>
@endsection
