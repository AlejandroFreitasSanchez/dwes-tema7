<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('titulo')</title>
    @vite(['resources/sass/app.scss'])
</head>

<body>
    <header>
        <h1>Festival de cortos</h1>
        <h2>Muy pronto</h2>
    </header>
    @include('partials.nav')
    <main>
        @yield('contenido')
    </main>

    <footer>
        <small> &copy; DWES - Cortos</small>
    </footer>
</body>

</html>