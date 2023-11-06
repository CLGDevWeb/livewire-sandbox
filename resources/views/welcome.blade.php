<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative grid place-items-center px-8 min-h-screen bg-center bg-gray-100 dark:bg-gray-900">
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif

            <div class="mt-16 text-white">
                <livewire:hello-code />
                <livewire:hello-todo />
            </div>
        </div>
    </body>
</html>
