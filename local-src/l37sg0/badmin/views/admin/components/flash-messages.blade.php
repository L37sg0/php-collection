@if ($message = Session::get('success'))
    <div class="alert alert-success mt-3 text-center alert-dismissible" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger mt-3 text-center alert-dismissible" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (count($errors) && empty(Session::get('error')))
    <div class="alert alert-danger mt-3 text-center alert-dismissible" role="alert">
        <strong>{{ trans('Errors in form submission!') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


@if ($message = Session::get('warning'))
    <div class="alert alert-warning mt-3 text-center alert-dismissible" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


@if ($message = Session::get('info'))
    <div class="alert alert-info mt-3 text-center alert-dismissible" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

