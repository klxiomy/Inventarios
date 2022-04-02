<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $table="venta";
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cantidad_venta',
        'total_venta',

    ]; 
protected $table1="producto";
protected $fillable1 = [
    'descripcion',
    'precio',
    'stock',
    'Iva'
];
}
