<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="relative bg-yellow-50 overflow-hidden max-h-screen">

<aside class="fixed inset-y-0 left-0 bg-white shadow-md max-h-screen w-60">
    <div class="flex flex-col justify-between h-full">
        <div class="flex-grow">
            <div class="px-4 py-6 text-center border-b">
                <h1 class="text-xl font-bold leading-none"><span class="text-yellow-700">Login</span> Test</h1>
            </div>
            <div class="p-4">
                <ul class="space-y-1">
                    <li>
                        <a href="{{ route('home')  }}" class="flex items-center bg-yellow-200 rounded-xl font-bold text-sm text-yellow-900 py-3 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                                <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"/>
                            </svg>Home
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="p-4">
            <form action="{{ route('auth.logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full bg-yellow-700 text-white rounded-xl font-bold text-sm py-3 px-4 flex flex-row gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="" viewBox="0 0 16 16">
                        <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                    Logout
                </button>
            </form>
        </div>
    </div>
</aside>

<main class="ml-60 pt-16 max-h-screen overflow-auto">
    <div class="px-6 py-8">
        <div class="max-w-4xl mx-auto">
            @yield('content')
        </div>
    </div>
</main>
</body>
</html>
