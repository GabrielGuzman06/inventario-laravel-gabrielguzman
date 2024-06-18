@extends('layout.plantilla')

@section('titulo','Principal')

@section('contenido')

<header class="bg-gradient-to-r from-blue-600 to-purple-600 shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-extrabold tracking-wider text-white drop-shadow-lg">Lista de Productos</h1>
    </div>
</header>

<div class="container mx-auto mt-10 max-w-7xl">
    <div class="mb-6 flex justify-end">
        <button class="bg-gradient-to-r from-green-400 to-blue-500 hover:from-green-500 hover:to-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow-lg">
            <a href="{{ route('producto.crear') }}">Nuevo Registro</a>
        </button>
    </div>

    <table class="min-w-full border-collapse block md:table bg-white shadow-lg rounded-lg">
        <thead class="block md:table-header-group bg-gradient-to-r from-gray-700 to-gray-900 text-white">
            <tr class="md:border-none block md:table-row">
                <th class="p-4 font-bold text-left block md:table-cell">Nombre</th>
                <th class="p-4 font-bold text-left block md:table-cell">Precio</th>
                <th class="p-4 font-bold text-left block md:table-cell">Descripción</th>
                <th class="p-4 font-bold text-left block md:table-cell">Categoría</th>
                <th class="p-4 font-bold text-left block md:table-cell">Operaciones</th>
            </tr>
        </thead>
        <tbody class="block md:table-row-group">
            @foreach ($prod as $produ)
            <tr class="bg-gray-100 border-b block md:table-row">
                <td class="p-4 text-left block md:table-cell"><span class="md:hidden font-bold">Nombre:</span> {{$produ->nombre}}</td>
                <td class="p-4 text-left block md:table-cell"><span class="md:hidden font-bold">Precio:</span> {{$produ->precio}}</td>
                <td class="p-4 text-left block md:table-cell"><span class="md:hidden font-bold">Descripción:</span> {{$produ->descripcion}}</td>
                <td class="p-4 text-left block md:table-cell"><span class="md:hidden font-bold">Categoría:</span> {{$produ->categoria}}</td>
                <td class="p-4 text-left block md:table-cell">
                    <span class="md:hidden font-bold">Acciones:</span>
                    <button class="bg-gradient-to-r from-green-400 to-blue-500 hover:from-green-500 hover:to-blue-600 text-white font-bold py-1 px-2 rounded-lg">
                        <a href="{{ route('producto.mostrar', $produ->id) }}">Ver</a>
                    </button>
                    <button class="bg-gradient-to-r from-blue-400 to-purple-500 hover:from-blue-500 hover:to-purple-600 text-white font-bold py-1 px-2 rounded-lg">
                        <a href="{{ route('producto.editar', $produ) }}">Editar</a>
                    </button>
                    <form action="{{ route('producto.borrar', $produ) }}" method="POST" class="inline-block">
                        @method('delete')
                        @csrf
                        @if($produ->deleted_at)
                        <button type="submit" class="bg-gradient-to-r from-orange-400 to-red-500 hover:from-orange-500 hover:to-red-600 text-white font-bold py-1 px-2 rounded-lg">
                            <a href="{{ route('activapro', $produ->id) }}">Activar</a>
                        </button>
                        <button type="submit" class="bg-gradient-to-r from-red-400 to-red-700 hover:from-red-500 hover:to-red-800 text-white font-bold py-1 px-2 rounded-lg" onclick="return confirm('¿Desea eliminar a {{ $produ->nombre }}?')">
                            Borrar
                        </button>
                        @else
                        <button type="submit" class="bg-gradient-to-r from-purple-400 to-red-500 hover:from-purple-500 hover:to-red-600 text-white font-bold py-1 px-2 rounded-lg">
                            <a href="{{ route('desactivapro', $produ->id) }}">Desactivar</a>
                        </button>
                        @endif
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-6">
        {{ $prod->links() }}
    </div>
</div>

@endsection

