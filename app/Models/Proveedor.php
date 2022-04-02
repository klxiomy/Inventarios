<?php

namespace App\Models;
use App\Http\Controllers\ProveedorController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Proveedor as Authenticatable;

class Proveedor extends Model
{
    use HasFactory;
   protected $table="proveedor";
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'descripcion',
        'nombre',
        'direccion',
        'telefono'
    ];
}
