<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Components in Laravel 7</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="flex flex-col items-center">
        <h1 class="text-3xl font-bold underline">Example</h1>
        <x-sidebar title="My Sidebar" :name="$name" class="bg-gray-100">
            <x-slot name="heading">Sidebar Cooler</x-slot>
            <p>Content</p>
        </x-sidebar>

        <x-navigation />
    </body>
</html>
