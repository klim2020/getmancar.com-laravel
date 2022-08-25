<meta charset="UTF-8">
<link rel="icon" type="image/x-icon" href="/images/favicon.ico">
<meta name="description" content="Simple starter webpack 5 project template boilerplate supporting SASS/PostCSS, Babel ES7, browser syncing, code linting. Easy project setup having multiple features and developer friendly tools.">
<meta name="keywords" content="webpack, webpack-configuration, template, boilerplate, setup, html, css, sass, javascript">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="{{asset('/vendor/bootstrap.bundle.min.js')}}"></script>
<style rel="stylesheet" href="{{ asset('/vendor/css/swiper-bundle.min.css') }}"></style>
<!-- <link rel="stylesheet" href="vendor/css/bootstrap.min.css"></link> -->
<style rel="stylesheet" href="vendor/css/swiper-bundle.min.css"></style>

{{-- @vite([ 'resources/js/app.js']) --}}
@vite([ 'resources/scss/app.scss', 'resources/js/app.js'])
