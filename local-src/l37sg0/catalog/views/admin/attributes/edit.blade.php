@php use L37sg0\Catalog\Models\CatalogCategory;use L37sg0\Catalog\Repositories\AttributeRepository; @endphp
@extends('admin::admin.admin')


@section('content_header')
    @parent
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{!empty($attribute) ? trans('Edit Attribute ' . $attribute->title) : trans('New Attribute')}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-outline-success m-1"
                    id="save_attribute">{{trans('Save')}}</button>
            @if(!empty($attribute))
                <a href="{{ route('admin.attributes.delete', ['id' => $attribute->id]) }}"
                   class="btn btn-sm btn-outline-danger m-1">
                    {{trans('Delete')}}
                </a>
            @endif
            <a href="{{ route('admin.attributes.list') }}"
               class="btn btn-sm btn-outline-secondary m-1">{{trans('Back')}}</a>
        </div>
    </div>

@endsection

@section('content_body')
    @parent
    <div class="container">
        <form id="edit_attribute_form" method="POST"
              action="{{ !empty($attribute) ? route('admin.attributes.update') : route('admin.attributes.store') }}">
            @csrf
            <input hidden="" name="id" value="{{ !empty($attribute) ? $attribute->id : '' }}">

            <div class="mb-3">
                <label for="#type" class="form-label">{{ trans('Attribute Type') }}</label>
                <select class="form-control" id="type" name="type">
                    <option value="">{{ trans('--Select attribute type--') }}</option>
                    @foreach(AttributeRepository::getTypesWithLabels() as $type => $label)
                        <option
                            value="{{ $type }}"
                            {{ (!empty($attribute) && $attribute->type == $type) ? 'selected' : '' }}>
                            {{ $label }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="#title" class="form-label">{{ trans('Title') }}</label>
                <input type="text" class="form-control" id="title" name="title"
                       value="{{ !empty($attribute) ? $attribute->title : '' }}">
            </div>
            <div class="mb-3">
                <label for="#slug" class="form-label">{{ trans('Slug') }}</label>
                <input type="text" class="form-control" id="slug" name="slug"
                       value="{{ !empty($attribute) ? $attribute->slug : '' }}">
            </div>
        </form>
    </div>
@endsection

@section('page_js')
    @parent
    <script>
        $(document).ready(function () {
            $('#save_attribute').on('click', function () {
                $('#edit_attribute_form').submit();
            })
        });
    </script>
@endsection
