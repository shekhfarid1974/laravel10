<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Call Center</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .bg-custom { background-color: #1a202c; }
        .text-custom { color: #ff6f61; }
    </style>
</head>
<body class="antialiased bg-gray-100">

    <!-- Header -->
    <header class="bg-custom text-white py-4 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="/path/to/logo.png" alt="Call Center Logo">
                </div>
                <div class="text-lg font-semibold">Call Center</div>
                <div></div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="flex items-center justify-center min-h-screen bg-gray-200">

        <div class="bg-white p-8 rounded-lg shadow-lg w-full sm:w-96">
            <h2 class="text-3xl font-bold text-center text-custom mb-6">Welcome to the Call Center</h2>

            @if (Route::has('login'))
                <div class="text-center">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="block w-full text-center font-semibold text-white bg-custom hover:bg-red-600 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">Go to Dashboard</a>
                    @else
                        <div class="mb-4">
                            <a href="{{ route('login') }}" class="block w-full text-center font-semibold text-white bg-custom hover:bg-red-600 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">Log in</a>
                        </div>
                        @if (Route::has('register'))
                            <div>
                                <a href="{{ route('register') }}" class="block w-full text-center font-semibold text-white bg-gray-600 hover:bg-gray-700 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500">Register</a>
                            </div>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>

</body>
</html>
