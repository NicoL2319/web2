<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')



    <title>AeroLink.com</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body>


    <nav class="bg-blue-500">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div>
                    <a href="/" class="text-white font-bold uppercase text-2xl">AeroLink</a>
                </div>
                <div class="hidden md:flex space-x-4">
                    <a href="/" class="text-white">Inicio</a>
                    <a href="/top" class="text-white">Servicios</a>
                    <a href="#" class="text-white">Productos</a>
                    <a href="#" class="text-white">Nosotros</a>
                    <a href="#" class="text-white">Contacto</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
</body>

</html>
