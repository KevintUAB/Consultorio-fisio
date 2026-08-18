<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;


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
| Página de Productos
|--------------------------------------------------------------------------
*/

Route:: get('/productos', [ProductoController::class, 'crear'])->name('productos');
Route:: post('/productos', [ProductoController::class, 'guardar']);