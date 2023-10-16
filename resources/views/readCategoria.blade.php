@extends('layouts/plantilla')
@section('contenido')
    <div class="bg-slate-600 rounded p-32 text-white container mt-6 mx-auto text-center">
        <h1 class="text-4xl mb-4">Read</h1>
        <a href="/createCategoria"
            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            Crear categoria
        </a>
        <a href="/readContacto"
            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            Go back
        </a>
        <table class="table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Actualizar</th>
                    <th class="px-4 py-2">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                        <td class="border px-4 py-5">{{$item->nombre}}</td>
                        <td class="border px-4 py-5">
                            <a href={{route('editarCatego',$item->id)}}
                                class="bg-transparent hover:bg-yellow-500 text-yellow-700 font-semibold hover:text-white py-2 px-4 border border-yellow-500 hover:border-transparent rounded">
                                Actualizar
                            </a>
                        </td>
                        <td class="border px-4 py-5">
                            <a  href={{route('mostrarCatego',$item->id)}}
                                class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
                                Eliminar
                            </a>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
