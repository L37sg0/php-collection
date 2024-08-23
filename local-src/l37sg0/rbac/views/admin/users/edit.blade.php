@php use App\Models\User;use L37sg0\Rbac\Models\Role;use L37sg0\Rbac\Repositories\RoleRepository;use L37sg0\Rbac\Repositories\UserRepository; @endphp
@php /** @var User $user */ @endphp
@extends('admin::admin.base')


@section('page_header')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{!empty($user) ? trans('Edit User ' . $user->name) : trans('New User')}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-outline-success m-1" id="save_user">{{trans('Save')}}</button>
            @if(!empty($user))
                <a href="{{ route('admin.users.delete', ['id' => $user->id]) }}"
                   class="btn btn-sm btn-outline-danger m-1"
                   id="delete_role">{{trans('Delete')}}</a>
            @endif
            <a href="{{ route('admin.users.list') }}" class="btn btn-sm btn-outline-secondary m-1"
               id="delete_role">{{trans('Back')}}</a>
        </div>
    </div>

@endsection

@section('page_body')
    <div class="container">
        <form id="edit_user_form" method="POST"
              action="{{ !empty($user) ? route('admin.users.update') : route('admin.users.store') }}">
            @csrf
            <input hidden="" name="id" value="{{ !empty($user) ? $user->id : '' }}">
            <div class="mb-3">
                <label for="#name" class="form-label">{{ trans('Name') }}</label>
                <input type="text" class="form-control" id="name" name="name"
                       value="{{ !empty($user) ? $user->name : '' }}">
            </div>
            <div class="mb-3">
                <label for="#email" class="form-label">{{ trans('Email') }}</label>
                <input type="text" class="form-control" id="email" name="email"
                       value="{{ !empty($user) ? $user->email : '' }}">
            </div>
            @if(empty($user))
                <div class="mb-3">
                    <label for="#password" class="form-label">{{ trans('Password') }}</label>
                    <input class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="#password_confirm" class="form-label">{{ trans('Confirm password') }}</label>
                    <input class="form-control" id="password_confirm" name="password_confirm">
                </div>
            @endif
            @php /** @var Role $roles */@endphp
            @foreach($roles as $role)
                <div class="mb-3 form-check">
                    @php $checked = (!empty($user) && UserRepository::hasRole($user,$role)) ? 'checked=""' : '' @endphp
                    <input type="checkbox" class="form-check-input" id="role-{{ $role->id }}"
                           {{ $checked }} name="roles[{{ $role->id }}]">
                    <label class="form-check-label" for="#role-{{ $role->id }}">
                        {{ $role->title }}
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
            $('#save_user').on('click', function () {
                $('#edit_user_form').submit();
            })
        });
    </script>
@endsection
