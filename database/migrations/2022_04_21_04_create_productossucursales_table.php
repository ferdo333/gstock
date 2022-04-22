<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductossucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('productossucursales', function (Blueprint $table) {
                $table->id();
                $table->integer('precio');
                $table->integer('cantidad');
                $table->foreignId('productos_id')->constrained();
                $table->foreignId('sucursales_id')->constrained();
                
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productossucursales');
    }
}
