<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Eyetec Computers') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-900">

    {{-- NAVBAR --}}
    @include('components.navigation')

    {{-- PAGE CONTENT --}}
    <main class="min-h-screen">
        {{ $slot }}
    </main>

    {{-- FOOTER --}}
    <footer class="bg-white border-t mt-16">
        <div class="max-w-7xl mx-auto px-4 py-6 text-sm text-gray-500 text-center">
            © {{ date('Y') }} Eyetec Computers. All rights reserved.
        </div>
    </footer>

</body>

</html>