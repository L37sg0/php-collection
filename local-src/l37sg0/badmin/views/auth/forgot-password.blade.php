@extends('admin::admin.guest')

@section('page_title')
    @parent
    {{ trans('Forgotten Password') }}
@endsection

@section('page_body')
    @parent
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <!-- Full height and center -->
        <div class="row">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8"> <!-- Adjust '8' to make the card wider or narrower -->
                            <div class="card">
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="card-text">
                                            {{ trans('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                        </div>
                                        <div class="form-floating">
                                            <input required type="email" class="form-control" id="floatingInput"
                                                   placeholder="name@example.com" name="email">
                                            <label for="floatingInput">{{trans('Email address')}}</label>
                                        </div>
                                        @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="card-footer d-flex justify-content-between align-items-center">
                                        <button class="btn btn-outline-success py-2"
                                                type="submit">{{ trans('EMAIL PASSWORD RESET LINK') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

@endsection
