<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function registroMarca(Request $request){
        $request->validate([
          'descripcion'=> 'required',
          

        ]);
 
        $marca= new Marca();
        $marca->descripcion = $request->descripcion;
        $marca->save();
    
        return response()->json([
          "status" =>1,
          "msg" =>"¡registro de marca fue exitoso!",
        ]);
 
}
public function index(){
  //trae todos los registros
  $marca= Marca::all();
  return $marca;
}
//actualiza
public function update(Request $request){
  $marca=Marca::findOrFail($request->id);
  $marca->descripcion = $request->descripcion;
  
  $marca->save();

  return response()->json([
    "status" =>1,
    "msg" =>"¡actualizacion de marca fue exitoso!",

  ]);
}

//elimina
public function destroy(Request $request){
  $marca=Marca::destroy($request->id);
  return $marca;
  
}
}
