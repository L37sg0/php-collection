<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Новинарски сайт')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Новини</a>

        <ul class="navbar-nav ms-auto">
            @foreach ($categories as $category)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/?category=' . $category->slug) }}">
                        {{ $category->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>


<div class="container mt-4">
    @yield('content')
</div>
</body>
</html>
