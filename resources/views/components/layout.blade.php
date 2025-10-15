<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Learn Laravel 12</title>
    <link rel="icon" href="{{ asset('img/Laravel.svg') }}" type="image/svg+xml">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-900 flex flex-col min-h-screen">
    <div class="flex-1 flex flex-col">
        <!-- Navbar Component -->
        <x-navbar />

        <!-- Header Component -->
        <x-header>
            {{$title}}
        </x-header>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col">
            <div class="flex-1 mx-auto max-w-7xl px-4 py-5 sm:px-6 lg:px-8">
                {{$slot}}
            </div>
        </main>
    </div>

    <!-- Footer Component -->
    <x-footer />
</body>

</html>