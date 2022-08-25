{{-- Основной шаблон для вывода лэндингов(Батуми) --}}

    <!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Default title')</title>
    @include('parts.head')


</head>

<body>

@yield('background', view('parts.background'))

@include('parts.header')

@yield('banner', view('blocks.banner'))

@yield('about')

@yield('why_we')

@yield('how_to_use')


@include('parts.footer')



</body>
</html>
