<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Mostrar productos públicamente
    public function index()
    {
        $productos = Producto::all();

        return view('productos', compact('productos'));
    }

    // Mostrar formulario para registrar producto
    public function nuevo()
    {
        return view('productos_nuevo');
    }

    // Guardar producto
    public function guardar(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:100',
            'precio' => 'required|numeric|min:0'
        ]);

        Producto::create($datos);

        return redirect()->route('productos')
            ->with('producto_exitoso', 'Producto registrado correctamente.');
    }
}