<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>index</title>
    <link rel="stylesheet" href="{{asset('frontend/style.css') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body>

@include('frontend\components\header')


@yield('content')


<footer>
 @include('frontend\components\footer')
</footer>

</body>
</html>

