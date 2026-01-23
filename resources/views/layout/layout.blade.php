<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HKM Gladiators Trnava - @yield('title')</title>
</head>
<body>
    <header>
        @include('layout.partials.nav')
        @include('layout.partials.nav-admin')
    </header>
    <main>
        @yield('main')
    </main>
    @include('layout.partials.footer')
</body>
</html>
