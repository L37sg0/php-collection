@extends('admin::admin.base')
@section('page_header')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ trans('Profile') }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-outline-success m-1" id="save_role">{{trans('Save')}}</button>
            <a href="{{ route('admin.roles.list') }}" class="btn btn-sm btn-outline-secondary m-1"
               id="delete_role">{{trans('Back')}}</a>
        </div>
    </div>

@endsection
@section('page_body')
    <div class="container my-4">
        <div class="card m-2">
            <div class="card-header">
                <h1 class="h5 mb-0">{{ trans('Profile Information') }}</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.profile.update') }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                        <label for="name">{{ trans('Name') }}</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email"
                               value="{{ $user->email }}">
                        <label for="email">{{ trans('Email address') }}</label>
                    </div>
                    <button type="submit" class="btn btn-outline-success">{{ trans('Save') }}</button>
                </form>
            </div>
        </div>

        <div class="card m-2">
            <div class="card-header">
                <h1 class="h5 mb-0">{{ trans('Update Password') }}</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    @method('PUT')
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="current_password"
                               name="current_password">
                        <label for="current_password">{{ trans('Current Password') }}</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password">
                        <label for="password">{{ trans('New Password') }}</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password_confirmation"
                               name="password_confirmation">
                        <label for="password_confirmation">{{ trans('Confirm Password') }}</label>
                    </div>
                    <button type="submit" class="btn btn-outline-success">{{ trans('Save') }}</button>
                </form>
            </div>
        </div>
    </div>

@endsection
