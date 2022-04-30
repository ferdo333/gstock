<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursales';
    protected $primarykey =  'id_sucursales';
    

    public function productosucursal(){
        return $this->hasMany(Productosucursal::class);
    }
}
