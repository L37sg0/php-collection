@php use App\Models\Tag; @endphp
@php /** @var Tag $tag */ @endphp
@extends('admin::admin.admin')


@section('content_header')
    @parent
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{!empty($tag) ? trans('Edit Tag ' . $tag->name) : trans('New Tag')}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-outline-success m-1"
                    id="save_tag">{{trans('Save')}}</button>
            @if(!empty($tag))
                <a href="{{ route('admin.tags.delete', ['id' => $tag->id]) }}"
                   class="btn btn-sm btn-outline-danger m-1"
                   id="delete_tag">{{trans('Delete')}}</a>
            @endif
            <a href="{{ route('admin.tags.list') }}"
               class="btn btn-sm btn-outline-secondary m-1">{{trans('Back')}}</a>
        </div>
    </div>

@endsection

@section('content_body')
    @parent
    <div class="container">
        <form id="edit_tag_form" method="POST"
              action="{{ !empty($tag) ? route('admin.tags.update') : route('admin.tags.store') }}">
            @csrf
            <input hidden="" name="id" value="{{ !empty($tag) ? $tag->id : '' }}">

            <div class="mb-3">
                <label for="#name" class="form-label">{{ trans('name') }}</label>
                <input type="text" class="form-control" id="name" name="name"
                       value="{{ !empty($tag) ? $tag->name : '' }}">
            </div>
            <div class="mb-3">
                <label for="#slug" class="form-label">{{ trans('Slug') }}</label>
                <input type="text" class="form-control" id="slug" name="slug"
                       value="{{ !empty($tag) ? $tag->slug : '' }}">
            </div>
        </form>
    </div>
@endsection

@section('page_js')
    @parent
    <script>
        $(document).ready(function () {
            $('#save_tag').on('click', function () {
                $('#edit_tag_form').submit();
            })
        });
    </script>
@endsection
