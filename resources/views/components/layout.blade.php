<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ isset($title) ? "$title | ".config('app.name') : config('app.name') }}</title>

    <livewire:styles />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="relative bg-gray-200">
    {{ $slot }}

    <livewire:components.modal />
    <livewire:scripts />
</body>
</html>
