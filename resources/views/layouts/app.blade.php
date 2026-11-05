<!DOCTYPE html>
<html lang="id" data-theme="kartini">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | R.A. Kartini</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex flex-col bg-base-100 text-base-content font-sans antialiased">

    @include('partials.navbar')

    <main class="flex-1">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>
