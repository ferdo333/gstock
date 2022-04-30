<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $primarykey =  'id_categorias';
    
    public function producto(){
        return $this->hasMany(Producto::class);
    }
    
}
