<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function registroUsu(Request $request){
        $request->validate([
            'tipo_documento'=> 'required',
            'numero_documento'=> 'required',
          
          'nombre'=> 'required',
          'direccion'=> 'required',
          'telefono'=> 'required',

        ]);
 
        $usuario= new Usuario();
        $usuario->tipo_documento = $request->tipo_documento;
        $usuario->numero_documento = $request->numero_documento;
        $usuario->nombre = $request->nombre;
        $usuario->direccion = $request->direccion;
        $usuario->telefono = $request->telefono;
        $usuario->save();
    
        return response()->json([
          "status" =>1,
          "msg" =>"¡registro de usuario fue exitoso!",
        ]);
 
}
public function index(){
  //trae todos los registros
  $usuario= Usuario::all();
  return $usuario;
}
//actualiza
public function update(Request $request){
  $usuario=Usuario::findOrFail($request->id);
  $usuario->tipo_documento = $request->tipo_documento;
  $usuario->numero_documento = $request->numero_documento;
  $usuario->nombre = $request->nombre;
  $usuario->direccion = $request->direccion;
  $usuario->telefono = $request->telefono;
  $usuario->save();

  return response()->json([
    "status" =>1,
    "msg" =>"¡actualizacion de usuario fue exitoso!",

  ]);
}

//elimina
public function destroy(Request $request){
  $usuario=Usuario::destroy($request->id);
  return $usuario;
  
}
}
