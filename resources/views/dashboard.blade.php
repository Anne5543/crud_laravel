<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        #banner{
            height: 100vh;
            width: 100%;
            display: block;
            margin: 0;
        }
    </style>
</head>
<body class="font-sans bg-gray-100">
    @include('layouts.navigation') 
    @yield('content')
    
    <img src="{{ asset('images/banner.png') }}" alt="Banner" id="banner">
</body>
</html>
