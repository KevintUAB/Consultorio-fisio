<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nuevo producto - Clínica Fisio</title>

    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

</head>


<body>


<header>

    <div class="logo">

        <h1>FisioSalud</h1>

    </div>


    <nav>

        <a href="{{ url('/') }}">Inicio</a>

        <a href="{{ url('/contacto') }}">Contacto</a>

        <a href="{{ route('productos') }}">Productos</a>

    </nav>


    <button id="modo">
        🌙 Modo oscuro
    </button>

</header>



<main>


    <section class="tarjeta">

        <h2>Registrar nuevo producto</h2>


        {{-- Mostrar errores de validación --}}

        @if ($errors->any())

            <div class="aviso error">

                <strong>
                    Se encontraron los siguientes errores:
                </strong>

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif


        <form action="{{ url('/productos') }}" method="POST">

            @csrf


            <label for="nombre">
                Nombre del producto
            </label>


            <input
                type="text"
                id="nombre"
                name="nombre"
                placeholder="Nombre del producto"
                value="{{ old('nombre') }}"
                required
            >


            <label for="precio">
                Precio
            </label>


            <input
                type="number"
                id="precio"
                name="precio"
                step="0.01"
                min="0"
                placeholder="0.00"
                value="{{ old('precio') }}"
                required
            >

            <label for="stock">
                Stock disponible
            </label>

            <input
                type="number"
                id="stock"
                name="stock"
                min="0"
                placeholder="Cantidad disponible"
                value="{{ old('stock') }}"
                required
            >

            <label for="stock">
                Stock disponible
            </label>

            <input
                type="number"
                id="stock"
                name="stock"
                min="0"
                placeholder="Cantidad disponible"
                value="{{ old('stock') }}"
                required
            >

            <button type="submit">
                Registrar producto
            </button>

        </form>


        <br>


        <a href="{{ route('productos') }}">
            Ver productos
        </a>


        <br><br>


        <form action="{{ url('/logout') }}" method="POST">

            @csrf

            <button type="submit">
                Cerrar sesión
            </button>

        </form>

    </section>


</main>


<script src="{{ asset('js/script.js') }}"></script>

</body>

</html>