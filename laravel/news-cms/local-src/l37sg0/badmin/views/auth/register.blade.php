@extends('admin::admin.guest')

@section('page_title')
    @parent
    {{ trans('Register') }}
@endsection

@section('page_body')
    @parent
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card" style="width: 100%; max-width: 600px;">
            <div class="card-body">
                <h2 class="card-title text-left text-success">
                    {{ trans('Register') }}
                </h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-floating">
                        <input required type="text" class="form-control mb-3" id="floatingInput" placeholder="Your Name"
                               name="name" value="{{ old('name', '') }}">
                        <label for="floatingInput">{{ trans('Name') }}</label>
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input required type="email" class="form-control mb-3" id="floatingInput"
                               placeholder="name@example.com" name="email" value="{{ old('email', '') }}">
                        <label for="floatingInput">{{trans('Email address')}}</label>
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input required type="password" class="form-control mb-3" id="floatingPassword"
                               placeholder="Password" name="password" value="{{ old('password', '') }}">
                        <label for="floatingPassword">{{trans('Password')}}</label>
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input required type="password" class="form-control mb-3" id="floatingPassword"
                               placeholder="Password"
                               name="password_confirmation" value="{{ old('password_confirmation', '') }}">
                        <label for="floatingPassword">{{trans('Confirm Password')}}</label>
                        @error('password_confirmation')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-outline-success w-100 py-2" type="submit">{{trans('Register')}}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
