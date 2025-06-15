<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @php
    $categories = \App\Models\Category::orderBy('order','asc')->get();
    @endphp
    <nav class="flex justify-between items-center py-3 px-12 bg-blue-900 text-white">
        <h1 class="font-bold text-lg">LOGO</h1>
        <div class="flex gap-3">
            <a href="/">Home</a>
           @foreach ($categories as $category )
           <a href="">{{$category->name}}</a>
           @endforeach
            <a href="/login">Login</a>


        </div>
    </nav>
    <br>

    @yield('content')



    <footer class="text-center bg-gray-800 text-white p-4 mt-5">
        <p>&copy; 2025 My laravel Project</p>
        <p>Created by You</p>
    </footer>
</body>

</html>