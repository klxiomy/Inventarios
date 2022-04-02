<?php

namespace App\Http\Controllers;

use App\Models\Presentacion;
use Illuminate\Http\Request;

class PresentacionController extends Controller
{
    public function registroPresentacion(Request $request){
        $request->validate([
          'descripcion'=> 'required',
          'forma'=> 'required',
          'tipo'=> 'required',
          

        ]);
 
        $presentacion= new Presentacion();
        $presentacion->descripcion = $request->descripcion;
        $presentacion->forma = $request->forma;
        $presentacion->tipo = $request->tipo;
        
        $presentacion->save();
    
        return response()->json([
          "status" =>1,
          "msg" =>"¡registro de presentacion fue exitoso!",
        ]);
 
}
public function index(){
  //trae todos los registros
  $presentacion= Presentacion::all();
  return $presentacion;
}
//actualiza
public function update(Request $request){
  $presentacion=Presentacion::findOrFail($request->id);
  $presentacion->descripcion = $request->descripcion;
        $presentacion->forma = $request->forma;
        $presentacion->tipo = $request->tipo;
        
        $presentacion->save();

        return response()->json([
            "status" =>1,
            "msg" =>"¡actualizacion de presentacion fue exitoso!",
          ]);
    
  
}

//elimina
public function destroy(Request $request){
  $presentacion=Presentacion::destroy($request->id);
  return $presentacion;
  
}
}

