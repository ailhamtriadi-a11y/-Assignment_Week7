<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>

    <!-- Load CSS and JavaScript through Vite -->
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen bg-slate-900 text-slate-100">

    <!-- Partial Navbar -->
    @include('partials.navbar')

    <!-- Main page content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Partial Footer -->
    @include('partials.footer')

</body>
</html>