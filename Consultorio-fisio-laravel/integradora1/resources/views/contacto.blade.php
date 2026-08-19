<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contacto - Clínica Fisio</title>

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

        </nav>


        <button id="modo">
            🌙 Modo oscuro
        </button>

    </header>
    <main>

        <section id="contacto" class="tarjeta">

            <h2>Reserva tu cita</h2>

            <p>
            ¿En qué podemos ayudarte? Escríbenos.
            </p>

            <form id="form-pedido"
                novalidate
                method="POST"
                action="{{ url('/contacto') }}">

                @csrf

                @if ($errors->any())
                    <div class="aviso error">
                        <strong>Hay algunos errores:</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                    </div>
                @endif
                <label for="nombre">
                    Nombre completo
                </label>

                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    placeholder="Tu nombre y apellido"
                    value="{{ old('nombre') }}"
                    required
                >

                <label for="correo">
                    Correo electrónico
                </label>

                <input
                    type="email"
                    id="correo"
                    name="correo"
                    placeholder="tunombre@correo.com"
                    value="{{ old('correo') }}"
                    required
                >

                <label for="pedido">
                    Tu pedido
                </label>

                <textarea
                    id="pedido"
                    name="pedido"
                    rows="4"
                    placeholder="Cuéntanos qué necesitas"
                >{{ old('pedido') }}</textarea>

                <button type="submit">
                    Enviar pedido
                </button>

                <p id="error-pedido" class="aviso"></p>

            </form>


            @if (session('pedido_exitoso'))

                <div class="aviso exito" id="mensaje-exito">
                    <h2>Pedido recibido, caserito</h2>
                    <p>
                        Nombre: {{ session('pedido_exitoso')['nombre'] }}
                    </p>

                    <p>
                        Correo: {{ session('pedido_exitoso')['correo'] }}
                    </p>

                    <p>
                        Pedido: {{ session('pedido_exitoso')['pedido'] }}
                    </p>

                </div>

            @endif
            

        </section>

</main>



<footer>

    <p>
        © 2026 Clínica Fisio
    </p>

    <p>
        Página de Facebook: Clínica Fisio
        &nbsp;&nbsp;&nbsp;
        Correo Electrónico: Clinica_Fisio@gmail.com
    </p>

</footer>



<script src="{{ asset('js/script.js') }}"></script>

</body>

</html>