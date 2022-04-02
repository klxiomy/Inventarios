<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->integer('precio');
            $table->string('stock');
            $table->integer('Iva');
            $table->unsignedBigInteger('id_presentacion');
            $table->foreign('id_presentacion')->references('id')->on('presentacion')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_proveedor');
            $table->foreign('id_proveedor')->references('id')->on('proveedor')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_marca');
            $table->foreign('id_marca')->references('id')->on('marca')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
           
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
