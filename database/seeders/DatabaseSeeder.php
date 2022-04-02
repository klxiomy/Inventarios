<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
        $this->call(UserTableSeeder::class);
        $this->call(MarcaTableSeeder::class);
        $this->call(CompraTableSeeder::class);
        $this->call(PresentacionTableSeeder::class);
        $this->call(ProveedorTableSeeder::class);
        $this->call(ProductoTableSeeder::class);
        $this->call(CompraTableSeeder::class);
        $this->call(VentaTableSeeder::class);
       //$this->call(FacturacompraTableSeeder::class);
       //$this->call(FacturaventaTableSeeder::class);
        
      
       
        
    }
}
