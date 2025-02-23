@php use L37sg0\Catalog\Models\CatalogAttribute;use L37sg0\Catalog\Repositories\AttributeRepository; @endphp
@extends('admin::admin.admin')


@section('content_header')
    @parent
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{trans('Attributes')}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.attributes.edit') }}"
                   class="btn btn-sm btn-outline-success">{{trans('New Attribute')}}</a>
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
                <th scope="col">{{ trans('Title') }}</th>
                <th scope="col">{{ trans('Slug') }}</th>
                <th scope="col">{{ trans('Type') }}</th>
                <th scope="col">{{ trans('Actions') }}</th>
            </tr>
            </thead>
            <tbody>
            @php /** @var CatalogAttribute $attribute */ @endphp
            @foreach($attributes as $attribute)
                <tr>
                    <td>{{ $attribute->id }}</td>
                    <td>{{ $attribute->title }}</td>
                    <td>{{ $attribute->slug }}</td>
                    <td>{{ AttributeRepository::getTypesWithLabels()[$attribute->type] }}</td>
                    <td>
                        <a href="{{ route('admin.attributes.edit', ['id' => $attribute->id]) }}"
                           class="btn btn-sm btn-outline-success" id="edit"><i class="fas fa-pencil"></i></a>
                        <a href="{{ route('admin.attributes.delete', ['id' => $attribute->id]) }}"
                           class="btn btn-sm btn-outline-danger" id="delete"><i class="fas fa-trash-can"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
