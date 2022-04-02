<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function registroV(Request $request){
        $request->validate([
          'cantidad_venta'=> 'required',
          'total_venta'=> 'required',
          'id_producto'=>'required',

        ]);
 
        $venta= new Venta();
        $venta->cantidad_venta = $request->cantidad_venta;
       
        $venta->total_venta = $request->total_venta;
        $venta->id_producto=$request->id_producto;
        $venta->save();
    
        return response()->json([
          "status" =>1,
          "msg" =>"¡registro de venta fue exitoso!",
        ]);
 
}
public function index(){
  //trae todos los registros
  $venta= Venta::all();
  return $venta;
}
//actualiza
public function update(Request $request){
  $venta=Venta::findOrFail($request->id);
  $venta= new Venta();
  $venta->cantidad_venta = $request->cantidad_venta;
  
  $venta->total_venta = $request->total_venta;
  $venta->id_producto=$request->id_producto;
  $venta->save();
  return response()->json([
    "status" =>1,
    "msg" =>"¡actualizacion de venta fue exitoso!",

  ]);
}

//elimina
public function destroy(Request $request){
  $venta=Venta::destroy($request->id);
  return $venta;
  
}
}
