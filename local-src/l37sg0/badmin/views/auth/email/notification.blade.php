@extends('admin::admin.guest')

@section('page_body')
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card" style="width: 100%; max-width: 600px;">
            <div class="card-body">
                <h2 class="card-title text-left text-success">
                    {{ !empty($greeting) ? $greeting : trans('Hello!') }}
                </h2>

                @foreach ($introLines as $line)
                    <p class="card-text text-left mb-4">
                        {{ $line }}
                    </p>
                @endforeach

                @isset($actionText)
                    <div class="text-center mb-4">
                        <a href="{{ $actionUrl }}" class="btn btn-success">
                            {{ $actionText }}
                        </a>
                    </div>
                @endisset

                @foreach ($outroLines as $line)
                    <p class="card-text text-left mb-4">
                        {{ $line }}
                    </p>
                @endforeach

                <p class="card-text text-left font-weight-bold">
                    @if (! empty($salutation))
                        {{ $salutation }}
                    @else
                        @lang('Regards'),<br>
                        {{ config('app.name') }}
                    @endif
                </p>
            </div>

            <div class="card-footer text-muted">
                @isset($actionText)
                    <p class="text-left small">
                        @lang(
                        "If you're having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
                        'into your web browser:',
                        [
                            'actionText' => $actionText,
                        ]
                    )
                    </p>
                    <p class="text-left break-all">
                        <a href="{{ $actionUrl }}" class="text-primary">{{ $displayableActionUrl }}</a>
                    </p>
                @endisset
            </div>
        </div>
    </div>
@endsection
