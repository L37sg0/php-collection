@extends('admin::admin.guest')

@section('page_title')
    @parent
    {{ trans('Email Verification') }}
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
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="card-text">
                                            {{ trans('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between align-items-center">
                                        <button class="btn btn-outline-success py-2"
                                                type="submit">{{ trans('RESEND VERIFICATION EMAIL') }}</button>
                                        <a class="ms-3"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="cursor: pointer;">
                                            {{ trans('Logout') }}</a>
                                    </div>
                                </form>
                                <form id="logout-form" method="POST" action="{{ route('logout') }}"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

@endsection
