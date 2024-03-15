@extends('welcome')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AeroLink.com</title>

    <style>
    body,
    html {
        height: 100%;
        margin: 0;
        padding: 0;
    }


    body {
        background-image: url('https://img.freepik.com/foto-gratis/jumbo-jet-volando-cielo_23-2150895681.jpg?size=626&ext=jpg&ga=GA1.1.1319243779.1710374400&semt=sph');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;

    }
    </style>
</head>

<body>
    <div class=" mx-auto mt-8 items-end">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Primer cuadro de texto -->
            <div class="bg-white p-4 rounded-md shadow-md">
                <h3 class="text-lg font-semibold ">Cuadro 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo justo vitae ex lacinia tempor.
                </p>
            </div>
            <!-- Segundo cuadro de texto -->
            <div class="bg-white p-4 rounded-md shadow-md">
                <h3 class="text-lg font-semibold ">Cuadro 2</h3>
                <p>Integer sit amet velit eget ipsum vestibulum dapibus. Nulla facilisi.</p>
            </div>
            <!-- Tercer cuadro de texto -->
            <div class="bg-white p-4 rounded-md shadow-md">
                <h3 class="text-lg font-semibold ">Cuadro 3</h3>
                <p>Etiam ultricies eros nec nisl aliquet, vel posuere arcu ultrices.</p>
            </div>
        </div>
    </div>

</body>

</html>
@endsection
