<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Iniciar sesión</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .contenedor {
            width: 400px;
            margin: 80px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            cursor: pointer;
        }

        .error {
            background-color: #f8d7da;
            color: #842029;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <div class="contenedor">

        <h1>Iniciar sesión</h1>

        @if ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="/login" method="POST">

            @csrf

            <label for="email">Correo electrónico:</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
            >

            <label for="password">Contraseña:</label>

            <input
                type="password"
                id="password"
                name="password"
                required
            >

            <button type="submit">
                Iniciar sesión
            </button>

        </form>

    </div>

</body>

</html>