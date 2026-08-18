<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Productos - Clínica Fisio</title>

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
            <a href="{{ url('/productos') }}">Productos</a>
        </nav>

        <button id="modo">
            🌙 Modo oscuro
        </button>

    </header>

    <main>

        <section class="tarjeta">

            <h2>Registrar producto</h2>
            @if (session('producto_exitoso'))
                <div class="aviso exito">
                    {{session('producto_exitoso') }}
                </div>
            @endif
            <form method="POST" action="{{ url('/productos') }}">

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
                >

                <label for="precio">
                    Precio
                </label>

                <input
                    type="number"
                    id="precio"
                    name="precio"
                    step="0.01"
                    placeholder="0.00"
                    value="{{ old('precio') }}"
                >

                <button type="submit">
                    Registrar producto
                </button>

            </form>

        </section>
        <section class="tarjeta">

            <h2>Productos registrados</h2>

            @if ($productos->count() > 0)

            <table>

                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($productos as $producto)

                        <tr>
                            <td>{{ $producto->nombre }}</td>
                            <td>Bs. {{ number_format($producto->precio, 2) }}</td>
                        </tr>

                    @endforeach

                </tbody>

            </table>

            @else

            <p>No hay productos registrados.</p>

            @endif

        </section>
    </main>

    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>