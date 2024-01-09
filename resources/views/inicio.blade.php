<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/LogotipoIco.webp') }}" type="image/webp">

    <link rel="stylesheet" href="{{ asset ('css/inicio.css') }}">
    <title>Document</title>
</head>
<body>
    @include('layouts.navbar')

    <div id="cuerpo-inicio">
        <h1>Imágenes Slider presentación</h1>

        

        <h2>Cajas</h2>

            <div class="contenedor-imagenes">

                @foreach (range(1, 4) as $numero)
                <div>
                    <img src="{{ asset('images/cajas/imagen' . $numero . '.webp') }}" alt="Imagen {{ $numero }}">
                </div>
                @endforeach

                <!-- Repetir para otras imágenes con IDs únicos -->
            </div>

        <h2>Productos</h2>

        <!--
        <div class="contenedor-imagenes">

            <div class="caja-imagen">
                <img id="imagen1" src="/images/personajes/Ainoa1.webp" alt="Imagen 1">
            </div>

            <div class="caja-imagen">
                <img id="imagen2" src="/images/personajes/Ainoa2.webp" alt="Imagen 2">
            </div>

            <div class="caja-imagen">
                <img id="imagen3" src="/images/personajes/Ainoa3.webp" alt="Imagen 3">
            </div>
            <!-- Repetir para otras imágenes con IDs únicos 
        </div>
        -->

    </div>

</body>
 <footer>
    @include('layouts.footer')
 </footer>
</html>