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
            'precio' => 'required|numeric|min:0',
            'stock'=> 'required|integer|min:0'
        ],
        [
            'stock.required' => 'El stock es obligatorio.',
            'stock.integer' => 'el stock debe ser un numero entero.',
            'stock.min' => 'el stock no puede ser negativo.'
        ]
        );

        Producto::create($datos);

        return redirect()->route('productos')
            ->with('producto_exitoso', 'Producto registrado correctamente.');
    }
}