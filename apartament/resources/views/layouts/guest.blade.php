<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {

            /* Cambia el color de fondo según tu preferencia */
            color: rgb(75, 159, 214);
            padding: 20px; 
            font-family: 'Quicksand', sans-serif;">
        }

        .login {
            margin-top: 50px;
            /* Ajusta el margen superior según tu diseño */
            text-align: center;
            /* Centra el contenido */
        }

        .login h5 {
            font-size: 52px;
            /* Cambia el tamaño de fuente según tu preferencia */
        }

        p {
            font-size: 25px;
        }
    </style>
</head>

<body style="background-color: rgb(5, 5, 20); padding: 20px;">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100" style="background-color: rgb(5, 5, 20); padding: 20px;">
        <div class="login">
            <a href="/">
                <strong>
                    <h5>TOURISTRENT</h5>
                </strong>
                <p>Apartaments</p>
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
