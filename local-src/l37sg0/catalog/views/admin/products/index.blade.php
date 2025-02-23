@php use App\Models\User;use Illuminate\Support\Str;use L37sg0\Catalog\Models\CatalogProduct; @endphp
@extends('admin::admin.admin')


@section('content_header')
    @parent
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{trans('Products')}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.products.edit') }}"
                   class="btn btn-sm btn-outline-success">{{trans('New product')}}</a>
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
                <th scope="col">{{ trans('Image') }}</th>
                <th scope="col">{{ trans('Title') }}</th>
                <th scope="col">{{ trans('Slug') }}</th>
                <th scope="col">{{ trans('In stock') }}</th>
                <th scope="col">{{ trans('Actions') }}</th>
            </tr>
            </thead>
            <tbody>
            @php /** @var CatalogProduct $product */ @endphp
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td></td>
{{--                    <td><img src="{{ (!empty($product->primaryImage)) ? $product->primaryImage->image->image_url : '#' }}"--}}
{{--                             alt="{{ (!empty($product->primaryImage)) ? $product->primaryImage->image->alt_text : '#' }}"></td>--}}
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->slug }}</td>
                    <td>
                        <span class="text-{{ $product->in_stock ? trans('success') : trans('danger') }}">
                            {{ $product->in_stock ? trans('YES') : trans('NO') }}
                        </span>
                    </td>

                    <td>
                        <a href="{{ route('admin.products.edit', ['id' => $product->id]) }}"
                           class="btn btn-sm btn-outline-success" id="edit"><i class="fas fa-pencil"></i></a>
                        <a href="{{ route('admin.products.delete', ['id' => $product->id]) }}"
                           class="btn btn-sm btn-outline-danger" id="delete"><i class="fas fa-trash-can"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
