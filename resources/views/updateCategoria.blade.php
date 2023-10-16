@extends('layouts/plantilla')
@section('contenido')
<div class="bg-slate-600 rounded p-32 text-white container mt-6 mx-auto justify-content-around">
    <h1 class="text-5xl">Actualizar categoria</h1>
<form action={{route('actualizarCatego',$item->id)}} method="POST" class="w-full">
    @csrf
    @method('PUT')
    <div class="flex items-center border-b border-teal-500 py-2">
        <label  class="text-3xl" for="nombre">Nombre</label>
        <input id="nombre" name="nombre" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" value={{$item->nombre}}>
    </div>
    <button class="mt-5 bg-transparent hover:bg-green-500 text-green-700 mb-6 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
        Actualizar Categoria
    </button>
</form>
<a href="/readCategoria" class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">regresar</a>
</div>
@endsection