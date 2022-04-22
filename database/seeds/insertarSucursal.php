<?php

use Illuminate\Database\Seeder;

class insertarSucursal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('sucursales')->insert(array(
     [
        'nombre' => 'Mall Alto Las Condes' 
     ],
     [
        'nombre' => 'Mall Vivo Panoramico' 
     ],
     [
        'nombre' => 'Mall Plaza Oeste'
     ]  ));
        
          
          $this->command->info("Sucursal insertada");
    }
}