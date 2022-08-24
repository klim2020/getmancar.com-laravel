<meta charset="UTF-8">
<meta name="description" content="Simple starter webpack 5 project template boilerplate supporting SASS/PostCSS, Babel ES7, browser syncing, code linting. Easy project setup having multiple features and developer friendly tools.">
<meta name="keywords" content="webpack, webpack-configuration, template, boilerplate, setup, html, css, sass, javascript">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="{{asset('/build/vendor/bootstrap.bundle.min.js')}}"></script>
<style rel="stylesheet" href="{{ asset('/build/vendor/css/swiper-bundle.min.css') }}"></style>
<!-- <link rel="stylesheet" href="vendor/css/bootstrap.min.css"></link> -->
<style rel="stylesheet" href="vendor/css/swiper-bundle.min.css"></style>

@vite(['resources/scss/app.scss', 'resources/js/app.js'])
