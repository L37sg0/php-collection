@extends('admin::admin.guest')

@section('page_title')
    @parent
    {{ trans('Register') }}
@endsection

@section('page_body')
    @parent
    <div class="container-fluid">
        <div class="row">
            <main class="form-signin w-100 m-auto">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    {{--                <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">--}}
                    <h1 class="h3 mb-3 fw-normal">{{ trans('Register') }}</h1>

                    <div class="form-floating">
                        <input required type="text" class="form-control" id="floatingInput" placeholder="Your Name"
                               name="name">
                        <label for="floatingInput">{{ trans('Name') }}</label>
                    </div>

                    <div class="form-floating">
                        <input required type="email" class="form-control" id="floatingInput"
                               placeholder="name@example.com" name="email">
                        <label for="floatingInput">{{trans('Email address')}}</label>
                    </div>

                    <div class="form-floating">
                        <input required type="password" class="form-control" id="floatingPassword"
                               placeholder="Password" name="password">
                        <label for="floatingPassword">{{trans('Password')}}</label>
                    </div>

                    <div class="form-floating">
                        <input required type="password" class="form-control" id="floatingPassword"
                               placeholder="Password"
                               name="password_confirmation">
                        <label for="floatingPassword">{{trans('Confirm Password')}}</label>
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit">{{trans('Register')}}</button>
                </form>
            </main>
        </div>
    </div>
@endsection
