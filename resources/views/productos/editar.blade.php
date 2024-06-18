@extends('layout.plantilla')

@section('titulo', 'Editar Producto')

@section('contenido')

<header class="bg-blue-600 shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-white">Editar Producto</h1>
    </div>
</header>

<div class="container mx-auto mt-10 max-w-5xl">

    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Actualizar datos del producto {{ $producto->id }}</h2>

        <form action="{{ route('producto.update', $producto) }}" method="POST">
            @csrf
            @method('put')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Nombre del producto</label>
                    <input type="text" name="nombre" value="{{ $producto->nombre }}" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ingrese el nombre">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Precio</label>
                    <input type="text" name="precio" value="{{ $producto->precio }}" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ingrese el precio">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Descripción</label>
                    <input type="text" name="descripcion" value="{{ $producto->descripcion }}" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ingrese la descripción">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Categoría</label>
                    <input type="text" name="categoria" value="{{ $producto->categoria }}" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ingrese la categoría">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Categoría</label>
                    <select name="categoria_id" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="{{ $categoria_actual->id }}">{{ $categoria_actual->nombre }}</option>
                        @foreach ($categorias as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <button type="submit" class="bg-green-500 text-white font-semibold py-2 px-4 rounded-lg shadow hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">Guardar</button>
                <button class="bg-red-500 text-white font-semibold py-2 px-4 rounded-lg shadow ml-4 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400">
                    <a href="{{ route('producto.principal') }}">Cancelar</a>
                </button>
            </div>
        </form>
    </div>

</div>

@endsection
