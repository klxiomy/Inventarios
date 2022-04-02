<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function registroProduc(Request $request){
        $request->validate([
          'descripcion'=> 'required',
          'precio'=> 'required',
          'stock'=> 'required',
          'Iva'=> 'required',
          'id_marca'=> 'required',
          'id_presentacion'=> 'required',
          'id_proveedor'=>'required',

        ]);
 
        $producto= new Producto();
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->Iva = $request->Iva;
        $producto->id_marca=$request->id_marca;
        $producto->id_presentacion=$request->id_presentacion;
        $producto->id_proveedor=$request->id_proveedor;
        $producto->save();
    
        return response()->json([
          "status" =>1,
          "msg" =>"¡registro de producto fue exitoso!",
        ]);
 
}
public function index(){
  //trae todos los registros
  $producto= Producto::all();
  return $producto;
}
//actualiza
public function update(Request $request){
  $producto=Producto::findOrFail($request->id);
  $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->Iva = $request->Iva;
        $producto->id_marca=$request->id_marca;
        $producto->id_presentacion=$request->id_presentacion;
        $producto->id_proveedor=$request->id_proveedor;
        $producto->save();

  return response()->json([
    "status" =>1,
    "msg" =>"¡actualizacion de presentacion fue exitoso!",

  ]);
}

//elimina
public function destroy(Request $request){
  $producto=Producto::destroy($request->id);
  return $producto;
  
}
}
