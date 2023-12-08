<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <title>Laravel HTMX Todo</title>

    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="text-gray-100 bg-gray-900">
    <div class="py-12">
        @yield('content')
    </div>
</body>

</html>
