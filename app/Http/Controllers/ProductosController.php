<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Productosucursal;
use Illuminate\Support\Facade\DB;

class ProductosController extends Controller
{
    
 
        public function index(){


         /*   $categorias = Categoria::where('id', '=', $id )
            ->get()
            ->load('productos');
    
            return view('productos/listado',[
                'categorias' => $categorias
            ]);
*/
        
       $productos = Producto::get();

       return view('productos/listado', [
            'productos' => $productos
        ]);

    }

    public function create(){
        return view('productos/agregar');
    }

    public function store(Request $request){
        //validamos
        $this->validate($request,[
            'coduni' => 'required',
            'nombre' => 'required',
            'desc' => 'required',
            'categorias_id' => 'required'

        ]);

        //creamos
        $producto = new Producto();
        $producto->coduni = $request->coduni;
        $producto->nombre = $request->nombre;
        $producto->desc = $request->desc;
        $producto->categorias_id = $request->categorias_id;
        $producto->save();

        //obtenemos registros
        $producto = Producto::get();

        //enviamos a la vista principal
        return view('productos/listado', [
            'productos' => $producto
        ]);
    }
    
    /*VAMOS A INCLUIR EDITAR DESPUES.*/
    public function patch($id){
                   
    
        Producto::where('id', '=', $id)->patch();
         $productos = Producto::get();

    return view('productos/editar', [
        'productos' => $productos
    ]);
        
 }
    
    public function delete($id){
                   
        ProductoSucursal::where('productos_id', '=', $id)->delete();
            Producto::where('id', '=', $id)->delete();
             $productos = Producto::get();
        return view('productos/listado', [
            'productos' => $productos
        ]);
            
     }


}
    



