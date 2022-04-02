<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Logout;

class UserController extends Controller
{
    public function register(Request $request){
       $request->validate([
         'name'=> 'required',
         'email' => 'required|email|unique:users',
         'password' =>'required|confirmed'
       ]);

       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);
       $user->save();
   
       return response()->json([
         "status" =>1,
         "msg" =>"¡registro de usuario fue exitoso!",
       ]);

}
      public function login(Request $request){
        $request->validate([
          "email"=>"required|email",
          "password"=>"required"
        ]);
        $user = User::where("email", "=", $request->email)->first();
        //revisar si el id si existe
        if(isset($user->id)){
          //revisamos la encriptacion
          if (Hash::check($request->password, $user->password)){
            $token = $user->createToken("auth_token")->plainTextToken;
            return response()->json([
              "status" => 1,
              "msg" => "usuario correctamente logeado",
              "access_token" => $token
          ]);  
            }else {
              return response()->json([
                "status"=>0,
                "msg"=>"Error,contraseña incorrecta"

              ]);
            }
        }else {
          return response()->json([
            "status"=>0,
            "msg"=>"Error del id"
          ]);
      }
    }
    public function userProfile() {
      return response()->json([
          "status" => 0,
          "msg" => "Acerca del perfil de usuario",
          "data" => auth()->user()
      ]); 
  }
  public function Logout(){
  //  auth()->user()->tokens()->delete();

    return response( )->json([
      'status'=>0,
      "msg"=> 'cierre de sesion exitosa'
      
    ]);
  }
}