@extends('welcome')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AeroLink.com</title>
    @vite('resources/css/app.css')


    <style>
    .formulario {
        margin: 20px;
        width: 30%;
        box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);

    }
    body,
    html {
        height: 100%;
        margin: 0;
        padding: 0;
    }


    body {
        background-image: url('https://media.istockphoto.com/id/1178574687/es/foto/cielo-azul-y-nubes-blancas.webp?b=1&s=170667a&w=0&k=20&c=r-L578aQNPfBKu4PC0u7vvGi3o2duqC1nLdIS06GUlI=');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;

    }
    </style>

</head>

<body>
    <!--------------------------- Formulario ------------------------------>
    <nav >
        <div class="formulario">
            <div class=" bg-blue-400 w-50 p-20 rounded-lg ">
                <h2 class="text-2xl font-semibold mb-4">Formulario de contacto</h2>
                <form action="{{route('Todos')}}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nombre" class="block text-gray-700 ">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-input mt-1 block w-full rounded-lg"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="telefono" class="block text-gray-700">Telefono</label>
                        <input type="telefono" id="telefono" name="telefono"
                            class="form-input mt-1 block w-full rounded-lg" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="form-input mt-1 block w-full rounded-lg"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="mensaje" class="block text-gray-700">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" class="form-textarea mt-1 block w-full rounded-lg"
                            rows="4" required></textarea>
                    </div>
                    <div class="mt-6">
                        <button type="submit"
                            class="bg-blue-500 text-grey py-2 px-4 rounded hover:bg-blue-600">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
</body>

</html>
@endsection
