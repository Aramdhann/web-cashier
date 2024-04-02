<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('components.style')
</head>
<body>
    <div id="app">
        @include('components.navbar-item')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
