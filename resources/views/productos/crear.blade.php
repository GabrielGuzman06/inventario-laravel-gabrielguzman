@extends('layout.plantilla')

@section('titulo', 'Crear Producto')

@section('contenido')

<header class="bg-blue-600 shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-white">Crear Nuevo Producto</h1>
    </div>
</header>

<div class="container mx-auto mt-10 max-w-5xl">
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Introducir Datos</h2>

        <form action="{{ route('producto.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Nombre del producto</label>
                    <input type="text" name="nombre" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ingrese el nombre">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Precio</label>
                    <input type="text" name="precio" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ingrese el precio">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Descripción</label>
                    <input type="text" name="descripcion" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ingrese la descripción">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Categoría</label>
                    <input type="text" name="categoria" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ingrese la categoría">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Seleccione una Categoría</label>
                    <select name="categoria_id" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option value="">Seleccione una categoría</option>
                        @foreach ($categorias as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="flex justify-end mt-8 space-x-4">
                <button type="submit" class="bg-green-500 text-white font-semibold py-2 px-4 rounded-lg shadow hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">Insertar Datos</button>
                <a href="{{ route('producto.principal') }}" class="bg-gray-500 text-white font-semibold py-2 px-4 rounded-lg shadow hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-400">Volver</a>
            </div>
        </form>
    </div>
</div>

@endsection
