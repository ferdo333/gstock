<?php

use Illuminate\Database\Seeder;

class insertarProductoSucursal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('categorias')->insert(array(
            [
               'nombre' => 'Poleras' 
            ],
            [
               'nombre' => 'Polerón' 
            ],
            [
               'nombre' => 'Pantalón'
            ]  ));
               
                 
                 $this->command->info("Producto insertado en sucursal");

    }
}
