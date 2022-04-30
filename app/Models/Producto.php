<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primarykey =  'id_productos';
    public $timestamps = false;
    
    public function categoria(){
        return $this->belongsTo(Categoria::class, 'categorias_id');
    }
    public function productosucursal(){
        return $this->hasMany(Productosucursal::class);
    }
  
}
