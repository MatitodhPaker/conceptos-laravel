@extends('layouts/plantilla')
@section("titulo"," Crud Home")
@section('contenido')
<!DOCTYPE html>
<html lang="en">
    <div class="bg-slate-600 rounded p-32 text-white container mt-6 mx-auto text-center">
        <h1 class="text-4xl font-bold mb-12">CRUD con laravel</h1>
        <a  class="bg-green-400 px-2 py-3 rounded hover:bg-green-300 hover:text-black" href="/readContacto">Ir al Crud</a>
    </div>
@endsection