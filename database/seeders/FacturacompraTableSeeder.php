<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class FacturacompraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('factura_compras')->insert([
            'fecha' =>date('DD M Y',time()),
            'hora' =>date('H:i:s',time()),
            'id_venta'=> '1',
            'id_compra'=> '2',
            ]);
    }
        
    }

