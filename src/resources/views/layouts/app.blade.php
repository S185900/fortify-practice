<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortify-practice</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link rel="stylesheet" href="{{ asset('css/common.css')}}">
    @yield('css')
</head>
<body>
    <div class="app">
        <div class="header">
            <a class="header__link" href="{{ url('/') }}">
                <h1 class="header__heading">Fortify-practice</h1>
            </a>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>