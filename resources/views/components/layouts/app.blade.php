<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Livewier Basics' }}</title>

    @vite('resources/js/app.js')
</head>

<body class="min-h-screen bg-slate-800 text-slate-100 flex flex-col-2 items-center justify-center">
    <nav class="min-h-screen px-14 flex flex-col items-center justify-center space-y-4 text-xl border-r">
        <a href="{{ route('home') }}"
            class="{{ request()->routeIs('home') ? 'font-bold underline' : '' }}  hover:underline">Home</a>
        <a href="{{ route('todos') }}"
            class="{{ request()->routeIs('todos') ? 'font-bold underline' : '' }} hover:underline">Todos</a>
        <a href="{{ route('counter') }}"
            class="{{ request()->routeIs('counter') ? 'font-bold underline' : '' }} hover:underline">Counter</a>
    </nav>
    <main class="flex-grow">
        {{ $slot }}
    </main>
</body>

</html>