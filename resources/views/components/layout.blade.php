@props([
    'title' => 'Kathleen Jhoy N. Velasco | IT Portfolio',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        <meta name="description" content="Portfolio of Kathleen Jhoy N. Velasco — Bachelor of Science in Information Technology student at Data Center College of the Philippines. Aspiring IT professional with a foundation in software development and networking.">

        <meta property="og:title" content="{{ $title }}">
        <meta property="og:description" content="Portfolio of Kathleen Jhoy N. Velasco — IT student, aspiring professional, software development & networking.">
        <meta property="og:type" content="website">

        @fonts

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-[#0b0a10] text-[#f3eefc] font-sans antialiased selection:bg-[#a855f7]/30 selection:text-white">
        {{ $slot }}
    </body>
</html>