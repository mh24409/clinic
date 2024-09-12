<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @props([
        'title' => env('APP_NAME'),
        'meta_description' => env('APP_DESC'),
        'meta_keywords' => env('APP_KEYWS'),
        'meta_image' => asset('images/logo.png'),
    ])
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta itemprop="name" content="{{ $title }}">
    <meta itemprop="description" content="{{ $meta_description }}">
    {{-- URL  --}}
    <meta itemprop="image" content="{{ $meta_image }}">
    {{-- keyword1, keyword2, keyword3 --}}
    <meta name="keywords" content="{{ $meta_keywords }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="Mohamed Helmy">

    <!-- Open Graph -->
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $meta_description }}">
    <meta property="og:image" content="{{ $meta_image }}">
    <meta property="og:url" content="{{ URL::current() }}">
    <meta property="og:type" content="System">
    <meta property="og:site_name" content="{{ env('APP_NAME') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="{{ $meta_image }}">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $meta_description }}">
    <meta name="twitter:image" content="{{ $meta_image }}">


    <!-- Favicon -->
    <link rel="icon" href="{{ Vite::asset('resources/images/logo.png') }}" type="image/x-icon">

    @vite('resources/js/app.js')
</head>

<body class="light">
    <x-layouts.header />
    <x-layouts.aside />
    <div class="p-4 sm:ml-64 mt-14">
        {{ $slot }}
    </div>
    <x-inc.notify />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.min.js"
        integrity="sha512-b6lGn9+1aD2DgwZXuSY4BhhdrDURVzu7f/PASu4H1i5+CRpEalOOz/HNhgmxZTK9lObM1Q7ZG9jONPYz8klIMg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite('resources/js/datatablesTailwind.js')
    <script src="{{ Vite::asset('resources/js/notify.js') }}"></script>
    @stack('scripts')
</body>

</html>
