<?php

namespace App\Http\Controllers;

use App\Models\categorias;
use Illuminate\Http\Request;

class categoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titulo='Categoria Read';
        $items=categorias::all();
        return view('readCategoria',compact('titulo','items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titulo='Create categoria';
        return view('createCategoria',compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item= new categorias();
        $item->nombre=$request->nombre;
        $item->save();
        return redirect('/readCategoria');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $titulo='Borrar Categoria';
        $item=categorias::find($id);
        return view('deleteCategoria',compact('titulo','item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $titulo='Editar Categoria';
        $item=categorias::find($id);
        return view('updateCategoria',compact('titulo','item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $item=categorias::find($id);
        $item->nombre=$request->nombre;
        $item->save();
        return redirect('/readCategoria');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item=categorias::find($id);
        $item->delete();
        return redirect('/readCategoria');
    }
}
