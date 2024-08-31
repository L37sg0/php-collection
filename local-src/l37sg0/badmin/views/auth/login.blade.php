@extends('admin::admin.guest')

@section('page_title')
    @parent
    {{ trans('Login') }}
@endsection

@section('page_body')
    @parent
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card" style="width: 100%; max-width: 600px;">
            <div class="card-body">
                <h2 class="card-title text-left text-success">
                    {{ trans('Please Login') }}
                </h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-floating">
                        <input type="email" class="form-control mb-3" id="floatingInput" placeholder="name@example.com"
                               name="email">
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

                    <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            {{trans('Remember me')}}
                        </label>
                    </div>
                    <button class="btn btn-outline-success w-100 py-2" type="submit">{{trans('Log in')}}</button>
                </form>
                <div class="card-footer">
                    <a class="btn btn-link"
                       href="{{route('register')}}">{{ trans('Don\'t have an account? Register') }}</a>

                    <a class="btn btn-link"
                       href="{{route('password.request')}}">{{ trans('I\'ve forgot my password') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
