<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>{{ $title ?? config('app.name') }}</title>
    </head>

    <body class="flex h-screen w-full font-sans">
        <nav class="border-r w-52 p-8 bg-gradient-to-r from-slate-500 via-slate-300 to-slate-100 shadow-inner">
            <ul class="list-disc list-inside text-slate-700">
                <li>
                    <a wire:navigate href="{{ route('todos') }}" @class(['font-semibold' => request()->routeIs('todos')])>Todos</a>
                </li>
                <li>
                    <a wire:navigate href="{{ route('code') }}" @class(['font-semibold' => request()->routeIs('code')])>Code</a>
                </li>
                <li>
                    <a wire:navigate href="{{ route('posts.index') }}" @class(['font-semibold' => request()->routeIs('posts.index')])>Posts</a>
                </li>
            </ul>
        </nav>

        <main class="p-8 shadow-xl w-full bg-slate-50">
            {{ $slot }}
        </main>
    </body>
</html>
