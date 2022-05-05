<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Producto;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\DB;
class CategoriasController extends Controller
{
    public function index(){
         

        $productos = Producto::get();

        $categorias = Categoria::get();
  
         return view('productos/listado', [
           
              
              'categorias' => $categorias
             , 'productos' => $productos
            ]);
         
  
      }
  
}
