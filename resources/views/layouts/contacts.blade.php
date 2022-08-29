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

@yield('contacts_text')

@yield('faq')

@include('parts.footer')

@stack('styles_footer')

</body>
</html>
