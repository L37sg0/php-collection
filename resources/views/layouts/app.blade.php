@php use App\Models\Category; @endphp
<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('meta_title', 'Новини от света на технологиите')</title>
    <meta name="description"
          content="@yield('meta_description', 'Последни новини за AI, Big Data, Web3 и криптовалути.')">
    <meta name="keywords" content="@yield('meta_keywords', 'новини, технологии, AI, Big Data, криптовалути, Web3')">

{{--    TODO not sure should this be here --}}
{{--    <meta name="description" content="@yield('meta_description', 'Последни новини за AI, BigData, Blockchain и Web3.')">--}}
{{--    <meta name="keywords" content="@yield('meta_keywords', 'AI, BigData, Blockchain, Web3, криптовалути, технологии')">--}}
{{--    <meta property="og:title" content="@yield('meta_title', 'Технологични новини')">--}}
{{--    <meta property="og:description"--}}
{{--          content="@yield('meta_description', 'Последни новини за AI, BigData, Blockchain и Web3.')">--}}
{{--    <meta property="og:type" content="article">--}}
{{--    <meta property="og:url" content="{{ url()->current() }}">--}}
{{--    <meta property="og:image" content="@yield('meta_image', asset('default-image.jpg'))">--}}


    <!-- Open Graph (Facebook, LinkedIn) -->
    <meta property="og:title" content="@yield('meta_title', 'Новини от света на технологиите')">
    <meta property="og:description"
          content="@yield('meta_description', 'Последни новини за AI, Big Data, Web3 и криптовалути.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('meta_image', url('/default-image.jpg'))">

    <!-- Twitter Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('meta_title', 'Новини от света на технологиите')">
    <meta name="twitter:description"
          content="@yield('meta_description', 'Последни новини за AI, Big Data, Web3 и криптовалути.')">
    <meta name="twitter:image" content="@yield('meta_image', url('/default-image.jpg'))">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Новини</a>

        <ul class="navbar-nav ms-auto">
            @foreach (Category::all() as $category)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/?category=' . $category->slug) }}">
                        {{ $category->title }}
                    </a>
                </li>
            @endforeach
        </ul>
        <form action="{{ route('news.search') }}" method="GET">
            <input type="text" name="q" placeholder="Търси в сайта..." class="form-control" required>
            <button type="submit" class="btn btn-primary">🔍</button>
        </form>

    </div>
</nav>


<div class="container mt-4">
    @yield('content')
</div>
</body>
</html>
