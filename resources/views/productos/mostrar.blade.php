@extends('layout.plantilla')

@section('titulo','Mostrar Producto')

@section('contenido')

<header class="bg-blue-600 shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-white">Datos del Producto</h1>
    </div>
</header>

<div class="container mx-auto mt-10 max-w-5xl">
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Detalles del Producto</h2>

        <dl class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                <dt class="text-lg font-medium text-gray-700">ID:</dt>
                <dd class="mt-1 text-gray-900">{{ $producto->id }}</dd>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                <dt class="text-lg font-medium text-gray-700">Nombre:</dt>
                <dd class="mt-1 text-gray-900">{{ $producto->nombre }}</dd>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                <dt class="text-lg font-medium text-gray-700">Precio:</dt>
                <dd class="mt-1 text-gray-900">{{ $producto->precio }}</dd>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                <dt class="text-lg font-medium text-gray-700">Descripción:</dt>
                <dd class="mt-1 text-gray-900">{{ $producto->descripcion }}</dd>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                <dt class="text-lg font-medium text-gray-700">Categoría:</dt>
                <dd class="mt-1 text-gray-900">{{ $producto->categoria }} - {{ $categoria->nombre }}</dd>
            </div>
        </dl>

        <div class="flex justify-end mt-8 space-x-4">
            <a href="{{ route('producto.principal') }}" class="bg-gray-500 text-white font-semibold py-2 px-4 rounded-lg shadow hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-400">Volver</a>
            <a href="{{ route('producto.editar', $producto) }}" class="bg-yellow-500 text-white font-semibold py-2 px-4 rounded-lg shadow hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400">Editar</a>
            <a href="{{ route('producto.crear') }}" class="bg-green-500 text-white font-semibold py-2 px-4 rounded-lg shadow hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">Nuevo Registro</a>
        </div>
    </div>
</div>

@endsection
