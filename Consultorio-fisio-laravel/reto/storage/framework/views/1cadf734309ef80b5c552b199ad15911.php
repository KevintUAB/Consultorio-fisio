<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Clínica Fisio</title>

    <!-- CSS de Laravel -->
    <link rel="stylesheet" href="<?php echo e(asset('css/estilos.css')); ?>">

</head>


<body>


<header>

    <div class="logo">

        <h1>FisioSalud</h1>

    </div>

    <nav>

        <a href="<?php echo e(url('/')); ?>">Inicio</a>

        <a href="#servicios">Servicios</a>

        <a href="#especialistas">Especialistas</a>

        <a href="#citas">Citas</a>

        <a href="<?php echo e(url('/contacto')); ?>">Contacto</a>

    </nav>

    <button id="modo">🌙 Modo oscuro</button>

</header>



<section class="bienvenida">

    <h2>Tu salud es nuestra prioridad</h2>

    <p>
        Recupera tu movilidad y mejora tu calidad de vida con nuestros especialistas
        en fisioterapia y kinesiología, preparados para cuidar de ti y tu familia.
    </p>

    <button>
        Solicitar cita
    </button>

</section>



<main>

    <section id="servicios" class="servicios">

        <h2>Nuestros Servicios</h2>

        <div class="tarjetas">

            <div class="card">

                <h3>Fisioterapia Deportiva</h3>

                <p>
                    Prevención, tratamiento y recuperación de lesiones relacionadas
                    con la actividad física y el deporte.
                </p>

            </div>


            <div class="card">

                <h3>Rehabilitación Física</h3>

                <p>
                    Tratamientos para recuperar la movilidad, fuerza y funcionalidad
                    después de una lesión o cirugía.
                </p>

            </div>


            <div class="card">

                <h3>Terapia Manual</h3>

                <p>
                    Técnicas realizadas con las manos para aliviar el dolor,
                    mejorar la movilidad y reducir la tensión muscular.
                </p>

            </div>

        </div>

    </section>



    <section class="servicios">

        <div class="tarjetas">

            <div class="card">

                <h3>Electroterapia</h3>

                <p>
                    Uso de corrientes eléctricas terapéuticas para disminuir el dolor,
                    estimular los músculos y acelerar la recuperación.
                </p>

            </div>


            <div class="card">

                <h3>Masoterapia</h3>

                <p>
                    Aplicación de masajes terapéuticos para relajar los músculos,
                    aliviar el dolor y mejorar la circulación.
                </p>

            </div>


            <div class="card">

                <h3>Kinesiología</h3>

                <p>
                    Evaluación y tratamiento del movimiento corporal para prevenir
                    lesiones y restaurar la función física.
                </p>

            </div>

        </div>

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



<!-- JavaScript de Laravel -->
<script src="<?php echo e(asset('js/script.js')); ?>"></script>

</body>

</html><?php /**PATH C:\laragon\www\Consultorio-fisio-laravel\resources\views/inicio.blade.php ENDPATH**/ ?>