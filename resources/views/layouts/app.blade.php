<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boolpress | Admin</title>
    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    @include('admin.partials.header')
    <div class="container-fluid">
        @auth
            @include('admin.partials.aside')
        @endauth

        <main>
            @yield('content')
        </main>
    </div>

    {{-- @include('admin.partials.footer') --}}
</body>

</html>
