<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LoginController;
use App\Models\Herramienta;

/*
|--------------------------------------------------------------------------
| Página principal
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    return view('inicio');

});


/*
|--------------------------------------------------------------------------
| Página de contacto
|--------------------------------------------------------------------------
*/

Route::get('/contacto', function () {

    return view('contacto');

})->name('contacto');


Route::post('/contacto', function () {

    /* validación de datos en Laravel */

    $datos = request()->validate([
        'nombre' => 'required|string|max:100',
        'correo' => 'required|email',
        'pedido' => 'required|string|max:500'
    ]);

    return redirect()->route('contacto')
        ->with('pedido_exitoso', $datos);

});


/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/

Route::get('/login', [LoginController::class, 'mostrarLogin'])
    ->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth');

/*
|--------------------------------------------------------------------------
| Página de Productos
|--------------------------------------------------------------------------
*/
// Productos públicos
Route::get('/productos', [ProductoController::class, 'index'])
    ->name('productos');

// Formulario para nuevo producto - requiere login
Route::get('/productos/nuevo', [ProductoController::class, 'nuevo'])
    ->middleware('auth')
    ->name('productos.nuevo');

// Guardar producto - requiere login
Route::post('/productos', [ProductoController::class, 'guardar'])
    ->middleware('auth');


// Rutas de la Integradora - Ferretería El Tornillo

Route::get('/herramientas', function () {

    $herramientas = Herramienta::all();

    return view('integradora.herramientas', compact('herramientas'));

});

Route::get('/herramientas/nuevo', function () {

    return view('integradora.herramientas_nuevo');

});

Route::post('/herramientas/nuevo', function () {

    $datos = request()->validate(
        [
            'nombre' => 'required',
            'precio' => 'required|integer'
        ],
        [
            'nombre.required' => 'Escribí el nombre de la herramienta.',
            'precio.required' => 'Escribí el precio de la herramienta.',
            'precio.integer' => 'El precio se anota solo con cifras.'
        ]
    );

    Herramienta::create($datos);

    return redirect('/herramientas');

});