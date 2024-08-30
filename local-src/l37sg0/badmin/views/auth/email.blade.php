@extends('admin::admin.guest')

@section('page_body')
    <div class="container" style="font-family: Arial, sans-serif; color: #333;">
        <h2 class="text-center text-success">
            {{ !empty($greeting) ? $greeting : trans('Hello!') }}
        </h2>

        @foreach ($introLines as $line)
            <p class="text-center mb-4">
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
            <p class="text-center mb-4">
                {{ $line }}
            </p>
        @endforeach

        <p class="text-center font-weight-bold">
            @if (! empty($salutation))
                {{ $salutation }}
            @else
                @lang('Regards'),<br>
                {{ config('app.name') }}
            @endif
        </p>

        <hr>

        @isset($actionText)
            <p class="text-center text-muted small">
                @lang(
                "If you're having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
                'into your web browser:',
                [
                    'actionText' => $actionText,
                ]
            )
            </p>
            <p class="text-center break-all">
                <a href="{{ $actionUrl }}" class="text-success">{{ $displayableActionUrl }}</a>
            </p>
        @endisset
    </div>
@endsection
