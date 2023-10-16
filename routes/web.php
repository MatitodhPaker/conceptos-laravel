<?php
use App\Http\Controllers\categoriasController;
use App\Http\Controllers\contactosController;
use App\Http\Controllers\CrudController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\saludoController;
use App\Models\contactos;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(CrudController::class)->group(function (){
    Route::get('/', "index");
});
Route::get('/readContacto',[contactosController::class,'index']);
Route::get('/readCategoria',[categoriasController::class,'index']);
Route::get('/createCategoria',[categoriasController::class,'create']);
Route::get('/createContacto',[contactosController::class,'create']);
Route::post('/storeCategoria',[categoriasController::class,'store']);
Route::post('/storeContacto',[contactosController::class,'store']);
Route::get('/editCategoria/{id}',[categoriasController::class,'edit'])->name('editarCatego');
Route::get('/editContacto/{id}',[contactosController::class,'edit'])->name('editarCon');
Route::get('/showCategoria/{id}',[categoriasController::class,'show'])->name('mostrarCatego');
Route::get('/showContacto/{id}',[contactosController::class,'show'])->name('mostrarCon');
Route::put('/updateCategoria/{id}',[categoriasController::class,'update'])->name('actualizarCatego');
Route::put('/updateContacto/{id}',[contactosController::class,'update'])->name('actualizarCon');
Route::delete('/deleteCategoria/{id}',[categoriasController::class,'destroy'])->name('borrarCatego');
Route::delete('/deleteContacto/{id}',[contactosController::class,'destroy'])->name('borrarCon');
Route::get('/saludar/{nombre}/{edad?}',saludoController::class);
