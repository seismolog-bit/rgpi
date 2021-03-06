<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name', 'RGPI | Mempersatu anak Bangsa') }}</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Eduport- LMS, Education and Course Theme">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/'); }}assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/'); }}assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/'); }}assets/vendor/tiny-slider/tiny-slider.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/'); }}assets/vendor/choices/css/choices.min.css">

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="{{ URL::asset('/'); }}assets/css/style.css">

</head>

<body>

    @include('components.app.navigation')

    <main>
        {{ $slot }}
    </main>

    @include('components.app.footer')

    {{ $script }}

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

    <!-- Bootstrap JS -->
    <script src="{{ URL::asset('/'); }}assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="{{ URL::asset('/'); }}assets/vendor/tiny-slider/tiny-slider.js"></script>
    <script src="{{ URL::asset('/'); }}assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script src="{{ URL::asset('/'); }}assets/vendor/choices/js/choices.min.js"></script>

    <!-- Template Functions -->
    <script src="{{ URL::asset('/'); }}assets/js/functions.js"></script>

</body>

</html>