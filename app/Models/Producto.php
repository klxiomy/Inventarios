<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table="producto";
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'descripcion',
        'precio',
        'stock',
        'Iva'
    ];
    protected $tables="marca";
    protected $fillables = [
        'descripcion',
    ];
    protected $table3="presentacion";
    protected $fillables3 = [
        'descripcion',
        'forma',
        'tipo',
    ];
    protected $table4="proveedor";
    protected $fillables4 = [
        'descripcion',
        'nombre',
        'direccion',
        'telefono'
    ];
}
