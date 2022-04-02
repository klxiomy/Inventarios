<?php

namespace App\Http\Controllers;
use App\Models\Proveedor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function registroP(Request $request){
        $request->validate([
          'descripcion'=> 'required',
          'nombre'=> 'required',
          'direccion'=> 'required',
          'telefono'=> 'required',

        ]);
 
        $proveedor= new Proveedor();
        $proveedor->descripcion = $request->descripcion;
        $proveedor->nombre = $request->nombre;
        $proveedor->direccion = $request->direccion;
        $proveedor->telefono = $request->telefono;
        $proveedor->save();
    
        return response()->json([
          "status" =>1,
          "msg" =>"¡registro de proveedor fue exitoso!",
        ]);
 
}
public function index(){
  //trae todos los registros
  $proveedor= Proveedor::all();
  return $proveedor;
}
//actualiza
public function update(Request $request){
  $proveedor=Proveedor::findOrFail($request->id);
  $proveedor->descripcion = $request->descripcion;
  $proveedor->nombre = $request->nombre;
  $proveedor->direccion = $request->direccion;
  $proveedor->telefono = $request->telefono;
  $proveedor->save();

  return response()->json([
    "status" =>1,
    "msg" =>"¡actualizacion de presentacion fue exitoso!",

  ]);
}

//elimina
public function destroy(Request $request){
  $proveedor=Proveedor::destroy($request->id);
  return $proveedor;
  
}
}