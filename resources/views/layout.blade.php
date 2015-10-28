<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="{{ elixir('css/all.css') }}" rel="stylesheet">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

</head>
<body>
    @include('pages.nav')
    <div class="container" id="content">
        @yield('mainContent')
    </div>
    <div>
        @yield('footer')
        <script>
            $('select').select2();
        </script>
    </div>
</body>
</html>