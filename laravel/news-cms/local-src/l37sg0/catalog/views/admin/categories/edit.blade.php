@php use L37sg0\Catalog\Models\CatalogCategory; @endphp
@extends('admin::admin.admin')


@section('content_header')
    @parent
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{!empty($category) ? trans('Edit Category ' . $category->title) : trans('New Category')}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-outline-success m-1" id="save_category">{{trans('Save')}}</button>
            @if(!empty($category))
                <a href="{{ route('admin.categories.delete', ['id' => $category->id]) }}" class="btn btn-sm btn-outline-danger m-1"
                   id="delete_category">{{trans('Delete')}}</a>
            @endif
            <a href="{{ route('admin.categories.list') }}" class="btn btn-sm btn-outline-secondary m-1">{{trans('Back')}}</a>
        </div>
    </div>

@endsection

@section('content_body')
    @parent
    <div class="container">
        <form id="edit_category_form" method="POST" action="{{ !empty($category) ? route('admin.categories.update') : route('admin.categories.store') }}">
            @csrf
            <input hidden="" name="id" value="{{ !empty($category) ? $category->id : '' }}">

            <div class="mb-3">
                <div class="form-check form-switch">
                    <input class="form-check-input"
                           type="checkbox"
                           role="switch"
                           id="is_active"
                           name="is_active"
                           {{ !empty($category) && $category->is_active ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">{{ trans('Is active') }}</label>
                </div>

            </div>

            <div class="mb-3">
                <label for="#parent_id" class="form-label">{{ trans('Parent category') }}</label>
                <select class="form-control" id="parent_id" name="parent_id">
                    <option value="">{{ trans('--Select parent category--') }}</option>
                    @foreach(CatalogCategory::all() as $parentCategory)
                        <option
                            value="{{ $parentCategory->id }}"
                            {{ (!empty($category->parent_id) && $category->parent_id == $parentCategory->id) ? 'selected' : '' }}>
                            {{ $parentCategory->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="#title" class="form-label">{{ trans('Title') }}</label>
                <input type="text" class="form-control" id="title" name="title"
                       value="{{ !empty($category) ? $category->title : '' }}">
            </div>
            <div class="mb-3">
                <label for="#slug" class="form-label">{{ trans('Slug') }}</label>
                <input type="text" class="form-control" id="slug" name="slug"
                       value="{{ !empty($category) ? $category->slug : '' }}">
            </div>
{{--            <div class="mb-3">--}}
{{--                <label for="#description" class="form-label">{{ trans('Description') }}</label>--}}
{{--                <textarea class="form-control" id="description" name="description"--}}
{{--                >{{ !empty($category) ? $category->description : '' }}</textarea>--}}
{{--            </div>--}}
{{--            @php /** @var Permission $permission */@endphp--}}
{{--            @foreach($permissions as $permission)--}}
{{--                <div class="mb-3 form-check">--}}
{{--                    @php $checked = (!empty($category) && CategoryRepository::hasPermission($category,$permission)) ? 'checked=""' : '' @endphp--}}
{{--                    <input type="checkbox" class="form-check-input" id="permission-{{ $permission->id }}" {{ $checked }} name="permissions[{{ $permission->id }}]">--}}
{{--                    <label class="form-check-label" for="#permission-{{ $permission->id }}">--}}
{{--                        {{ $permission->slug }}--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--            @endforeach--}}
        </form>
    </div>
@endsection

@section('page_js')
    @parent
    <script>
        $(document).ready(function () {
            $('#save_category').on('click', function (){
                $('#edit_category_form').submit();
            })
        });
    </script>
@endsection
