<!DOCTYPE html>
<html lang="en">

<head>
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
    <style>
        body {
            background-image: url({{ Vite::asset('resources/images/login.jpg') }});
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
</head>

<body>

    {{ $slot }}

</body>

</html>
