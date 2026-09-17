@php use App\Models\News; use App\Models\Category; @endphp
@php
    /** @var News $newsItem */
@endphp
@extends('admin::admin.admin')

@section('page_css')
    @parent
    <style>
        .cke_notifications_area {
            display: none;
        }
    </style>
@endsection

@section('content_header')
    @parent
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{!empty($newsItem) ? trans('Edit News Item ' . $newsItem->title) : trans('New News Item')}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-outline-success m-1"
                    id="save_product">{{trans('Save')}}</button>
            @if(!empty($newsItem))
                <a href="{{ route('admin.news.delete', ['id' => $newsItem->id]) }}"
                   class="btn btn-sm btn-outline-danger m-1"
                   id="delete_category">{{trans('Delete')}}</a>
            @endif
            <a href="{{ route('admin.news.list') }}"
               class="btn btn-sm btn-outline-secondary m-1">{{trans('Back')}}</a>
        </div>
    </div>

@endsection

@section('content_body')
    @parent
    <div class="container">
        <form id="edit_product_form" method="POST"
              action="{{ !empty($newsItem) ? route('admin.news.update') : route('admin.news.store') }}">
            @csrf
            <input hidden="" name="id" value="{{ !empty($newsItem) ? $newsItem->id : '' }}">

            <div class="mb-3">
                <!--               TODO add published switch here -->
                {{--                <div class="form-check form-switch">--}}
                {{--                    <input class="form-check-input"--}}
                {{--                           type="checkbox"--}}
                {{--                           role="switch"--}}
                {{--                           id="in_stock"--}}
                {{--                           name="in_stock"--}}
                {{--                        {{ !empty($newsItem) && $newsItem->in_stock ? 'checked' : '' }}>--}}
                {{--                    <label class="form-check-label" for="in_stock">{{ trans('In stock') }}</label>--}}
                {{--                </div>--}}
            </div>

            <div class="mb-3">
                <label for="#title" class="form-label">{{ trans('Title') }}</label>
                <input type="text" class="form-control" id="title" name="title"
                       value="{{ !empty($newsItem) ? $newsItem->title : '' }}">
            </div>
            <div class="mb-3">
                <label for="#slug" class="form-label">{{ trans('Slug') }}</label>
                <input type="text" class="form-control" id="slug" name="slug"
                       value="{{ !empty($newsItem) ? $newsItem->slug : '' }}">
            </div>
            <div class="mb-3">
                <label for="#category_id" class="form-label">{{ trans('Category') }}</label>
                <select class="form-control" id="category_id" name="category_id">
                    <option value="">{{ trans('--Select category--') }}</option>
                    @foreach(Category::all() as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ (!empty($newsItem->category_id) && $newsItem->category_id == $category->id) ? 'selected' : '' }}>
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="#content" class="form-label">{{ trans('Content') }}</label>
                <textarea
                    class="form-control"
                    id="content"
                    name="content">
                    {{ !empty($newsItem) ? $newsItem->content : '' }}
                </textarea>
            </div>
        </form>
    </div>
@endsection

@section('page_js')
    @parent
    <script>
        $(document).ready(function () {
            $('#save_product').on('click', function () {
                $('#edit_product_form').submit();
            })
        });
    </script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
