<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >
    <title>Laravel HTMX Todo</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="text-gray-100 bg-gray-900 py-12"
    hx-headers='{"X-CSRF-TOKEN": "{{ csrf_token() }}"}'
>
    @yield('content')

</body>

</html>
