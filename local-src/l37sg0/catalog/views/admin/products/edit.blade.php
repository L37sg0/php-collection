@php use L37sg0\Catalog\Models\CatalogProduct; @endphp
@php
/** @var CatalogProduct $product */
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
        <h1 class="h2">{{!empty($product) ? trans('Edit Product ' . $product->title) : trans('New Product')}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-outline-success m-1" id="save_product">{{trans('Save')}}</button>
            @if(!empty($product))
                <a href="{{ route('admin.products.delete', ['id' => $product->id]) }}" class="btn btn-sm btn-outline-danger m-1"
                   id="delete_category">{{trans('Delete')}}</a>
            @endif
            <a href="{{ route('admin.products.list') }}" class="btn btn-sm btn-outline-secondary m-1">{{trans('Back')}}</a>
        </div>
    </div>

@endsection

@section('content_body')
    @parent
    <div class="container">
        <form id="edit_product_form" method="POST" action="{{ !empty($product) ? route('admin.products.update') : route('admin.products.store') }}">
            @csrf
            <input hidden="" name="id" value="{{ !empty($product) ? $product->id : '' }}">

            <div class="mb-3">
                <div class="form-check form-switch">
                    <input class="form-check-input"
                           type="checkbox"
                           role="switch"
                           id="in_stock"
                           name="in_stock"
                           {{ !empty($product) && $product->in_stock ? 'checked' : '' }}>
                    <label class="form-check-label" for="in_stock">{{ trans('In stock') }}</label>
                </div>
            </div>

{{--            <div class="mb-3">--}}
{{--                <label for="#parent_id" class="form-label">{{ trans('Parent Product') }}</label>--}}
{{--                <select class="form-control" id="parent_id" name="parent_id">--}}
{{--                    <option value="">{{ trans('--Select parent Product--') }}</option>--}}
{{--                    @foreach(CatalogCategory::all() as $parentCategory)--}}
{{--                        <option--}}
{{--                            value="{{ $parentCategory->id }}"--}}
{{--                            {{ (!empty($product->parent_id) && $product->parent_id == $parentCategory->id) ? 'selected' : '' }}>--}}
{{--                            {{ $parentCategory->title }}--}}
{{--                        </option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
            <div class="mb-3">
                <label for="#title" class="form-label">{{ trans('Title') }}</label>
                <input type="text" class="form-control" id="title" name="title"
                       value="{{ !empty($product) ? $product->title : '' }}">
            </div>
            <div class="mb-3">
                <label for="#slug" class="form-label">{{ trans('Slug') }}</label>
                <input type="text" class="form-control" id="slug" name="slug"
                       value="{{ !empty($product) ? $product->slug : '' }}">
            </div>
            <div class="mb-3">
                <label for="#description" class="form-label">{{ trans('Description') }}</label>
                <textarea
                    class="form-control"
                    id="description"
                    name="description">
                    {{ !empty($product) ? $product->description : '' }}
                </textarea>
            </div>
        </form>
    </div>
@endsection

@section('page_js')
    @parent
    <script>
        $(document).ready(function () {
            $('#save_product').on('click', function (){
                $('#edit_product_form').submit();
            })
        });
    </script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection
