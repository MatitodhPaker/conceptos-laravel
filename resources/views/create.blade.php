@extends('layouts/plantilla')
@section('contenido')
<div class="bg-slate-600 rounded p-32 text-white container mt-6 mx-auto justify-content-around">
    <h1 class="text-5xl">Agregar contacto</h1>
<form action="/storeContacto" method="POST" class="w-full">
    @csrf
    @method('POST')
    <div class="flex items-center border-b border-teal-500 py-2">
        <label  class="text-3xl" for="nombre">Nombre</label>
        <input id="nombre" name="nombre" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Jane Doe" aria-label="Full name">
    </div>
    <div class="flex items-center border-b border-teal-500 py-2">
        <label  class="text-3xl" for="apellido">Apellido</label>
        <input id="apellido" name="apellido" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Jane Doe" aria-label="Full name">
    </div>
    <div class="flex items-center border-b border-teal-500 py-2">
        <label  class="text-3xl" for="telefono">Telefono</label>
        <input id="telefono" name="telefono" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Jane Doe" aria-label="Full name">
    </div>
    <div class="flex items-center border-b border-teal-500 py-2">
        <label  class="text-3xl" for="email">Email</label>
        <input id="email" name="email" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Jane Doe" aria-label="Full name">
    </div>
    <select id="categoria" name="categoria" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected>selecciona una categoria</option>
        @foreach ($items as $item)
            <option value="{{$item->id}}">{{$item->nombre}}</option>
        @endforeach
    </select>
    <button class="mt-5 bg-transparent hover:bg-green-500 text-green-700 mb-6 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
        Agreagr Categoria
    </button>
</form>
<a href="/readContacto" class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">regresar</a>
</div>
@endsection