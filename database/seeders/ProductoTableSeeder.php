<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('producto')->insert([
        'descripcion' => Str::random(12),
        'precio' => mt_rand(0,200000),
        'stock' => Str::random(13),
        'Iva' => mt_rand(0,1000),
       'id_presentacion'=> '2',
       'id_proveedor'=> '2',
       'id_marca'=> '2'
        ]);
    }
}
