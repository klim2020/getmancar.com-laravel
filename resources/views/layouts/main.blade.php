{{-- Основной шаблон для вывода лэндингов(главной страницы) --}}

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

@yield('how_it_works', view('blocks.how_it_works'))

@yield('gallery', view('blocks.gallery'))

@yield('review', view('blocks.review'))

@include('parts.footer')

@stack('styles_footer')

</body>
</html>
