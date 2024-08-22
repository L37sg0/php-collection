@php use L37sg0\Rbac\Models\Role; @endphp
@extends('admin::admin.base')


@section('page_header')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{trans('Roles')}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.roles.edit') }}" class="btn btn-sm btn-outline-success">{{trans('New Role')}}</a>
            </div>
        </div>
    </div>

@endsection

@section('page_body')
    <div class="table-responsive small">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">{{ trans('Title') }}</th>
                <th scope="col">{{ trans('Slug') }}</th>
                <th scope="col">{{ trans('Description') }}</th>
                <th scope="col">{{ trans('Actions') }}</th>
            </tr>
            </thead>
            <tbody>
            @php /** @var Role $role */ @endphp
            @foreach($roles as $role)
                <tr>
                    <td>{{ $role->title }}</td>
                    <td>{{ $role->slug }}</td>
                    <td>{{ $role->description }}</td>
                    <td>
                        <a href="{{ route('admin.roles.edit', ['id' => $role->id]) }}" class="btn btn-sm btn-outline-success" id="edit"><i class="fas fa-pencil"></i></a>
                        <a href="{{ route('admin.roles.delete', ['id' => $role->id]) }}" class="btn btn-sm btn-outline-danger" id="delete"><i class="fas fa-trash-can"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('page_js')
    @parent
    <script>
        $(document).ready(function (){

        });
    </script>
@endsection
