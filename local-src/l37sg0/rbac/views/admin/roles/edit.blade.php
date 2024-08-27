@php use L37sg0\Rbac\Models\Permission;use L37sg0\Rbac\Models\Role;use L37sg0\Rbac\Repositories\RoleRepository; @endphp
@php /** @var Role $role */ @endphp
@extends('admin::admin.admin')


@section('content_header')
    @parent
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{!empty($role) ? trans('Edit Role ' . $role->title) : trans('New Role')}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-outline-success m-1" id="save_role">{{trans('Save')}}</button>
            @if(!empty($role))
                <a href="{{ route('admin.roles.delete', ['id' => $role->id]) }}" class="btn btn-sm btn-outline-danger m-1"
                   id="delete_role">{{trans('Delete')}}</a>
            @endif
            <a href="{{ route('admin.roles.list') }}" class="btn btn-sm btn-outline-secondary m-1"
               id="delete_role">{{trans('Back')}}</a>
        </div>
    </div>

@endsection

@section('content_body')
    @parent
    <div class="container">
        <form id="edit_role_form" method="POST" action="{{ !empty($role) ? route('admin.roles.update') : route('admin.roles.store') }}">
            @csrf
            <input hidden="" name="id" value="{{ !empty($role) ? $role->id : '' }}">
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
                    @php $checked = (!empty($role) && RoleRepository::hasPermission($role,$permission)) ? 'checked=""' : '' @endphp
                    <input type="checkbox" class="form-check-input" id="permission-{{ $permission->id }}" {{ $checked }} name="permissions[{{ $permission->id }}]">
                    <label class="form-check-label" for="#permission-{{ $permission->id }}">
                        {{ $permission->slug }}
                    </label>
                </div>
            @endforeach
        </form>
    </div>
@endsection

@section('page_js')
    @parent
    <script>
        $(document).ready(function () {
            $('#save_role').on('click', function (){
                $('#edit_role_form').submit();
            })
        });
    </script>
@endsection
