<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            'tipo_documento' => Str::random(12),
            'numero_documento' => mt_rand(0,10000),
            'nombre' => Str::random(7),
            'direccion' => Str::random(13),
            'telefono' => mt_rand(0,1000),
            ]);
    }
}
