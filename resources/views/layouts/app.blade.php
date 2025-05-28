<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
        rel="stylesheet" />
</head>

<body class="font-sans antialiased">
    @include('layouts.alert')
    <div class="flex">
        <div class="h-screen w-52 bg-blue-100 shadow-md">
            <h2 class="text-center font bold text -xl my-5">LOGO</h2>
            <div>
                <a href="/dashboard" class="block pl-2 py-2 hover:bg-blue-300">Dashboard</a>
                <a href="/category" class="block pl-2 py-2 hover:bg-violet-300">Categories</a>
                <a href="" class="block pl-2 py-2 hover:bg-purple-300">Product</a>
                <a href="" class="block pl-2 py-2 hover:bg-green-300">Orders</a>
                <a href="" class="block pl-2 py-2 hover:bg-gray-300">LogOut</a>

            </div>
        </div>
        <div class="flex-1 p-4">
            <h2 class="font-bold text-2xl"> @yield('title') </h2>
            <hr class="mt-2 mb-2 h-1 bg-yellow-400">
            <div>@yield('content')</div>
        </div>
    </div>
</body>

</html>