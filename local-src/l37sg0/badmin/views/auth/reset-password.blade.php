@extends('admin::admin.guest')

@section('page_title')
    @parent
    {{ trans('Reset Password') }}
@endsection

@section('page_body')
    @parent
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card" style="width: 100%; max-width: 600px;">
            <div class="card-body">
                <h2 class="card-title text-left text-success">
                    {{ trans('Reset your password') }}
                </h2>

                <form method="POST" action="{{ route('password.store') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="form-floating">
                        <input type="email" class="form-control mb-3" id="floatingInput" placeholder="name@example.com"
                               name="email" value="{{old('email', $request->email)}}" required autofocus
                               autocomplete="username">
                        <label for="floatingInput">{{trans('Email address')}}</label>
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control mb-3" id="floatingPassword" placeholder="Password"
                               name="password">
                        <label for="floatingPassword">{{trans('Password')}}</label>
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control mb-3" id="floatingPassword" placeholder="Password"
                               name="password_confirmation">
                        <label for="floatingPassword">{{trans('Confirm Password')}}</label>
                        @error('password_confirmation')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-outline-success w-100 py-2" type="submit">{{trans('RESET PASSWORD')}}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
