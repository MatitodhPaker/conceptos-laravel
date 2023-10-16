<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index() {
        $titulo='inicio';
        return view('index',compact('titulo'));
    }
    public function read() {
        return view('read');
    }
    public function update() {
        return view('update');
    }
    public function delete() {
        return view('delete');
    }
    public function create() {
        return view('create');
    }
}