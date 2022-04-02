<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function registroC(Request $request){
        $request->validate([
          'cantidad'=> 'required',
          'valor_pagado'=> 'required',
          'id_producto'=>'required',

        ]);
 
        $compra= new Compra();
        $compra->cantidad = $request->cantidad;
        
        $compra->valor_pagado = $request->valor_pagado;
        $compra->id_producto=$request->id_producto;
        $compra->save();
    
        return response()->json([
          "status" =>1,
          "msg" =>"¡registro de compra fue exitoso!",
        ]);
 
}
public function index(){
  //trae todos los registros
  $compra= Compra::all();
  return $compra;
}
//actualiza
public function update(Request $request){
  $compra=Compra::findOrFail($request->id);
  $compra->cantidad = $request->cantidad;
      
        $compra->valor_pagado = $request->valor_pagado;
        $compra->id_producto=$request->id_producto;
        $compra->save();
  return response()->json([
    "status" =>1,
    "msg" =>"¡actualizacion de compra fue exitoso!",

  ]);
}

//elimina
public function destroy(Request $request){
  $compra=Compra::destroy($request->id);
  return $compra;
  
}
}
