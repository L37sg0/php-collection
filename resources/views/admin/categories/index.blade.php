@php use L37sg0\Catalog\Models\CatalogCategory; @endphp
@extends('admin::admin.admin')


@section('content_header')
    @parent
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{trans('Categories')}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.categories.edit') }}"
                   class="btn btn-sm btn-outline-success">{{trans('New Category')}}</a>
            </div>
        </div>
    </div>

@endsection

@section('content_body')
    @parent
    <div class="table-responsive small">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">{{ trans('#') }}</th>
                <th scope="col">{{ trans('Parent category') }}</th>
                <th scope="col">{{ trans('Title') }}</th>
                <th scope="col">{{ trans('Slug') }}</th>
                <th scope="col">{{ trans('Is active') }}</th>
                <th scope="col">{{ trans('Actions') }}</th>
            </tr>
            </thead>
            <tbody>
            @php /** @var CatalogCategory $category */ @endphp
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ (!empty($category->parent)) ? $category->parent->title : '----'}}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->slug }}</td>
                    <td><span class="text-{{ $category->is_active ? trans('success') : trans('danger') }}">{{ $category->is_active ? trans('YES') : trans('NO') }}</span></td>
                    <td>
                        <a href="{{ route('admin.categories.edit', ['id' => $category->id]) }}"
                           class="btn btn-sm btn-outline-success" id="edit"><i class="fas fa-pencil"></i></a>
                        <a href="{{ route('admin.categories.delete', ['id' => $category->id]) }}"
                           class="btn btn-sm btn-outline-danger" id="delete"><i class="fas fa-trash-can"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
