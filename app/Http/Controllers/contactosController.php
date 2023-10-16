<?php

namespace App\Http\Controllers;

use App\Models\categorias;
use App\Models\contactos;
use Illuminate\Http\Request;

class contactosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titulo='Conacto Read';
        $items=contactos::all();
        return view('read',compact('titulo','items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titulo='Create contacto';
        $items=categorias::all();
        return view('create',compact('titulo','items'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item=new contactos();
        $item->nombre=$request->nombre;
        $item->apellido=$request->apellido;
        $item->telefono=$request->telefono;
        $item->email=$request->email;
        $item->categoria=$request->categoria;
        $item->creado_por=1;
        $item->save();
        return redirect('/readContacto');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $titulo='Borrar Contacto';
        $item=contactos::find($id);
        $categorias=categorias::all();
        return view('delete',compact('titulo','item','categorias'));
    }   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $titulo='Editar Contacto';
        $item=contactos::find($id);
        $categorias=categorias::all();
        return view('update',compact('titulo','item','categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $item=contactos::find($id);
        $item->nombre=$request->nombre;
        $item->apellido=$request->apellido;
        $item->telefono=$request->telefono;
        $item->email=$request->email;
        $item->categoria=$request->categoria;
        $item->creado_por=1;
        $item->save();
        return redirect('/readContacto');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item=contactos::find($id);
        $item->delete();
        return redirect('/readContacto');
    }
}
