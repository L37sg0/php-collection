@extends('admin::admin.guest')

@section('page_title')
    @parent
    {{ trans('Login') }}
@endsection

@section('page_body')
    @parent
    <div class="container-fluid">
        <div class="row">
            <main class="form-signin w-100 m-auto">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    {{--                <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">--}}
                    <h1 class="h3 mb-3 fw-normal">{{trans('Please log in')}}</h1>

                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                               name="email">
                        <label for="floatingInput">{{trans('Email address')}}</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                               name="password">
                        <label for="floatingPassword">{{trans('Password')}}</label>
                    </div>

                    <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            {{trans('Remember me')}}
                        </label>
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit">{{trans('Log in')}}</button>
                </form>
                    <a class="btn btn-link" href="{{route('register')}}">{{ trans('Don\'t have an account? Register') }}</a>
            </main>

        </div>
    </div>
@endsection
