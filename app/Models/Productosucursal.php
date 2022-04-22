<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productosucursal extends Model
{
 
    protected $table = 'productossucursales';
    protected $primarykey =  'id_productossucursales';
    
    public function sucursal(){
        return $this->belongsTo(Sucursal::class, 'sucursales_id');
    }
    public function producto(){
        return $this->belongsTo(Producto::class, 'productos_id');
    }

}
