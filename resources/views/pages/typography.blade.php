<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Default title')</title>
    @include('parts.head')
</head>
<body style="background:black">

<h1>hello h1</h1>
<h2>hello h2</h2>
<h3>hello h3</h3>
<h4>hello h4</h4>


@stack('styles_footer')

</body>
</html>
