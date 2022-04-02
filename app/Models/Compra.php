<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $table="compra";
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cantidad',
        'valor_pagado',
    ];
    protected $table1="producto";
protected $fillable1 = [
    'descripcion',
    'precio',
    'stock',
    'Iva'
];
}
