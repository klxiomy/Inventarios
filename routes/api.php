<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\PresentacionController;
use App\Http\Controllers\VentaController;

use App\Http\Controllers\CompraController;
use App\Http\Controllers\MarcaController;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register', [UserController::class,'register']);
Route::post('login', [UserController::class,'login']);
Route::group( ['middleware' => ["auth:sanctum"]], function(){
    //rutas
    Route::get('userprofile', [UserController::class, 'userProfile']);
    Route::get('logout', [UserController::class, 'logout']);
});
//proveedor
Route::post('/proveedor', [ProveedorController::class,'registroP']);//registro
Route::get('/proveedor',[ProveedorController::class,'index']);//index
Route::put('/proveedor/{id}',[ProveedorController::class,'update']);//actualiza
Route::delete('/proveedor/{id}',[ProveedorController::class,'destroy']);//elimina
//Route::resource('proveedor',[ProveedorController::class]);
//presetacion
Route::post('/presentacion', [PresentacionController::class,'registroPresentacion']);//registro
Route::get('/presentacion',[PresentacionController::class,'index']);
Route::put('/presentacion/{id}',[PresentacionController::class,'update']);//actualiza
Route::delete('/presentacion/{id}',[PresentacionController::class,'destroy']);//elimina

//marca
Route::post('/marca', [MarcaController::class,'registroMarca']);//registro
Route::get('/marca',[MarcaController::class,'index']);
Route::put('/marca/{id}',[MarcaController::class,'update']);//actualiza
Route::delete('/marca/{id}',[MarcaController::class,'destroy']);//elimina

//Usuario
Route::post('/usuario', [UsuarioController::class,'registroUsu']);//registro
Route::get('/usuario',[UsuarioController::class,'index']);
Route::put('/usuario/{id}',[UsuarioController::class,'update']);//actualiza
Route::delete('/usuario/{id}',[UsuarioController::class,'destroy']);//elimina

//producto
Route::post('/producto', [ProductoController::class,'registroProduc']);//registro
Route::get('/producto',[ProductoController::class,'index']);
Route::put('/producto/{id}',[ProductoController::class,'update']);//actualiza
Route::delete('/producto/{id}',[ProductoController::class,'destroy']);//elimina

//compra
Route::post('/compra', [CompraController::class,'registroC']);//registro
Route::get('/compra',[CompraController::class,'index']);
Route::put('/compra/{id}',[CompraController::class,'update']);//actualiza
Route::delete('/compra/{id}',[CompraController::class,'destroy']);//elimina

//VENTA
Route::post('/venta', [VentaController::class,'registroV']);//registro
Route::get('/venta',[VentaController::class,'index']);
Route::put('/venta/{id}',[VentaController::class,'update']);//actualiza
Route::delete('/venta/{id}',[VentaController::class,'destroy']);//elimina