<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dasihayu - @yield('title', 'Portfolio')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>
<body class="font-sans">
    <nav class="mx-auto px-48 py-4 sticky top-0 bg-gray-50 z-10">
        <div class="flex justify-between items-center">
            <div>
                <a href="/" class="text-2xl font-bold">Dasihayu</a>
            </div>
            <div class="flex items-center gap-4">
                <ul class="flex space-x-4">
                    <li><a href="/" class="text-gray-700 hover:text-gray-900">Home</a></li>
                    <li><a href="/about" class="text-gray-700 hover:text-gray-900">About</a></li>
                    <li><a href="/projects" class="text-gray-700 hover:text-gray-900">Projects</a></li>
                    <li><a href="/blogs" class="text-gray-700 hover:text-gray-900">Blogs</a></li>
                </ul>
                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">Contact Me</button>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-8">
        <!-- Add your footer here -->
    </footer>
</body>
</html>