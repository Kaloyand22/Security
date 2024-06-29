<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testing</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans antialiased">

<header class="bg-white shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <div>
                <a href="/" class="text-2xl font-semibold text-gray-800">Security</a>
            </div>
            <nav class="space-x-4">
                @if (Route::has('login'))
                    <div class="flex items-center space-x-4">
                        @auth
                            <a href="{{ url('/home') }}" class="text-gray-800 hover:text-gray-600">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-800 hover:text-gray-600">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-gray-800 hover:text-gray-600">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </nav>
        </div>
    </div>
</header>

<main class="container mx-auto px-4 py-8">
    <div class="text-center">
        <h1 class="text-4xl font-semibold text-gray-800">Welcome to the security assignment</h1>
    </div>
</main>

</body>
</html>
