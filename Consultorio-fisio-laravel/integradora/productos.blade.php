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
            <a href="{{ route('productos') }}">Productos</a>
        </nav>

        <button id="modo">
            🌙 Modo oscuro
        </button>

    </header>

    <main>

        {{-- Mensaje después de registrar un producto --}}
        @if (session('producto_exitoso'))

            <div class="aviso exito">
                {{ session('producto_exitoso') }}
            </div>

        @endif


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

                                <td>
                                    {{ $producto->nombre }}
                                </td>

                                <td>
                                    Bs. {{ number_format($producto->precio, 2) }}
                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            @else

                <p>No hay productos registrados.</p>

            @endif

        </section>


        {{-- Acceso al registro de productos --}}
        <section class="tarjeta">

            <h2>Administración</h2>

            <p>
                Para registrar un nuevo producto debes iniciar sesión.
            </p>

            <a href="{{ route('productos.nuevo') }}">
                Registrar nuevo producto
            </a>

        </section>

    </main>

    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>