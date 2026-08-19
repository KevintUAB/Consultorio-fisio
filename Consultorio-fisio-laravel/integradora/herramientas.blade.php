@extends('layouts.base')

@section('content')

    <p>
        Ferretería El Tornillo ofrece herramientas de calidad
        para trabajos de reparación y construcción.
    </p>

    <p>
        Hay {{ count($herramientas) }} herramientas en el inventario.
    </p>

    @foreach ($herramientas as $herramienta)

        <div>
            <strong>{{ $herramienta->nombre }}</strong>
            - {{ $herramienta->precio }} Bs
        </div>

    @endforeach

    <p>
        Inventario atendido por Kevin Yasmani Toledo Apulaca
    </p>

    <a href="/herramientas/nuevo">
        Registrar nueva herramienta
    </a>

@endsection