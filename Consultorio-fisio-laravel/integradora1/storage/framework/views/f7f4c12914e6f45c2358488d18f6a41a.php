<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contacto - Clínica Fisio</title>

    <link rel="stylesheet" href="<?php echo e(asset('css/estilos.css')); ?>">

</head>


<body>


    <header>

        <div class="logo">

            <h1>FisioSalud</h1>

        </div>

        <nav>

            <a href="<?php echo e(url('/')); ?>">Inicio</a>

            <a href="<?php echo e(url('/contacto')); ?>">Contacto</a>

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
                action="<?php echo e(url('/contacto')); ?>">

                <?php echo csrf_field(); ?>

                <?php if($errors->any()): ?>
                    <div class="aviso error">
                        <strong>Hay algunos errores:</strong>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                    </div>
                <?php endif; ?>
                <label for="nombre">
                    Nombre completo
                </label>

                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    placeholder="Tu nombre y apellido"
                    value="<?php echo e(old('nombre')); ?>"
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
                    value="<?php echo e(old('correo')); ?>"
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
                ><?php echo e(old('pedido')); ?></textarea>

                <button type="submit">
                    Enviar pedido
                </button>

                <p id="error-pedido" class="aviso"></p>

            </form>


            <?php if(session('pedido_exitoso')): ?>

                <div class="aviso exito" id="mensaje-exito">
                    <h2>Pedido recibido, caserito</h2>
                    <p>
                        Nombre: <?php echo e(session('pedido_exitoso')['nombre']); ?>

                    </p>

                    <p>
                        Correo: <?php echo e(session('pedido_exitoso')['correo']); ?>

                    </p>

                    <p>
                        Pedido: <?php echo e(session('pedido_exitoso')['pedido']); ?>

                    </p>

                </div>

            <?php endif; ?>
            

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



<script src="<?php echo e(asset('js/script.js')); ?>"></script>

</body>

</html><?php /**PATH C:\laragon\www\Consultorio-fisio-laravel\resources\views/contacto.blade.php ENDPATH**/ ?>