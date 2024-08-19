@php use L37sg0\Rbac\Models\Permission;use L37sg0\Rbac\Models\Role;use L37sg0\Rbac\Repositories\RoleRepository; @endphp
@php /** @var Role $role */ @endphp
@extends('admin::admin.base')


@section('page_header')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{!empty($role) ? trans('Edit Role ' . $role->title) : trans('New Role')}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-primary">{{trans('Save')}}</button>
                <button type="button" class="btn btn-sm btn-danger">{{trans('Delete')}}</button>
            </div>
        </div>
    </div>

@endsection

@section('page_body')
    <div class="container">
        <form>
            @csrf
            <div class="mb-3">
                <label for="#title" class="form-label">{{ trans('Title') }}</label>
                <input type="text" class="form-control" id="title" name="title"
                       value="{{ !empty($role) ? $role->title : '' }}">
            </div>
            <div class="mb-3">
                <label for="#slug" class="form-label">{{ trans('Slug') }}</label>
                <input type="text" class="form-control" id="slug" name="slug"
                       value="{{ !empty($role) ? $role->slug : '' }}">
            </div>
            <div class="mb-3">
                <label for="#description" class="form-label">{{ trans('Description') }}</label>
                <textarea class="form-control" id="description" name="description"
                >{{ !empty($role) ? $role->description : '' }}</textarea>
            </div>
            @php /** @var Permission $permission */@endphp
            @foreach($permissions as $permission)
                <div class="mb-3 form-check">
                    @php $checked = RoleRepository::hasPermission($role,$permission) ? 'checked=""' : '' @endphp
                    <input type="checkbox" class="form-check-input" id="permission-{{ $permission->id }}" {{ $checked }}>
                    <label class="form-check-label" for="#permission-{{ $permission->id }}">
                        {{ $permission->slug }}
                    </label>
                </div>
            @endforeach
        </form>
    </div>
    {{--    <div class="table-responsive small">--}}
    {{--        <table class="table table-striped table-sm">--}}
    {{--            <thead>--}}
    {{--            <tr>--}}
    {{--                <th scope="col">{{ trans('Title') }}</th>--}}
    {{--                <th scope="col">{{ trans('Slug') }}</th>--}}
    {{--                <th scope="col">{{ trans('Description') }}</th>--}}
    {{--                <th scope="col">{{ trans('Actions') }}</th>--}}
    {{--            </tr>--}}
    {{--            </thead>--}}
    {{--            <tbody>--}}
    {{--            @php /** @var Role $role */ @endphp--}}
    {{--            @foreach($roles as $role)--}}
    {{--                <tr>--}}
    {{--                    <td>{{ $role->title }}</td>--}}
    {{--                    <td>{{ $role->slug }}</td>--}}
    {{--                    <td>{{ $role->description }}</td>--}}
    {{--                    <td>--}}
    {{--                        <button class="btn-sm btn-outline-primary"><i class="fas fa-pencil"></i></button>--}}
    {{--                        <button class="btn-sm btn-outline-primary"><i class="fas fa-trash-can"></i></button>--}}
    {{--                    </td>--}}
    {{--                </tr>--}}
    {{--            @endforeach--}}
    {{--            </tbody>--}}
    {{--        </table>--}}
    {{--    </div>--}}

@endsection
