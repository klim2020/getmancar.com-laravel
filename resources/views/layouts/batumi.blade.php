{{-- Основной шаблон для вывода лэндингов(Батуми) --}}

    <!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Default title')</title>
    @include('parts.head')


</head>

<body>

@yield('background')

@include('parts.header')

@yield('banner', view('blocks.banner'))

@yield('about')

@yield('why_we')

@yield('how_to_use')

@yield('text')

@yield('tariffs')

@yield('app_download')

@include('parts.footer')

@stack('styles_footer')


</body>
</html>
