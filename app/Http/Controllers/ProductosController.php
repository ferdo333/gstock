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
         

       
    // $categorias = Categoria::get();  
      $productos = Producto::get();

       return view('productos/listado', [
         
           
            'productos' => $productos
            //,'categorias' => $categorias
        ]);

    }
    public function categorias(){
        return $this->belongsTo(Categoria::class)
        ;
    }
   /* public function editar($id){

        $categoria = Categoria::where('id', $id)->get();


        $productos=Producto::where('categorias_id', $id)
        ->get()
        ->load('categoria');

        return view('productos/listado',[
            'categoria' => $categoria,
            'productos' => $productos
        ]);

    } */

    public function show($id){
        $producto = Producto::where('id', '=', $id )
        ->get();

        $categorias = Categoria::get();

        return view('productos/editar',[
            'producto' => $producto,
            'categorias' => $categorias
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
            'estado' => 'required',
            'categorias_id' => 'required'

        ]);

        //creamos
        $producto = new Producto();
        $producto->coduni = $request->coduni;
        $producto->nombre = $request->nombre;
        $producto->desc = $request->desc;
        $producto->estado = $request->estado;
        $producto->categorias_id = $request->categorias_id;
        $producto->save();

        //obtenemos registros
        $producto = Producto::get();

        //enviamos a la vista principal
        return view('productos/listado', [
            'productos' => $producto
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

     public function update(Request $request){
        //validamos
        $this->validate($request,[
            'coduni' => 'required',
            'nombre' => 'required',
            'desc' => 'required',
            'estado' => 'required',
            'categorias_id' => 'required'
        ]);
        $producto = Producto::where('id', $request->id )
        ->get();

        if($producto->isEmpty()){
            return redirect('/');
        }else{
            //$categoriaid = $producto[0]->categorias_id;
            //Actualizar Datos
            Producto::where('id', $request->id)
            ->update([
                'coduni' => $request->coduni,
                'nombre' => $request->nombre,
                'desc' => $request->desc,
                'estado' => $request->estado,
                'categorias_id' => $request->categorias_id

                
            ]);
        }
        return view('productos/listado', [
            'productos' => $producto
        ]);
     /*   return redirect()->action(
            [ProductosController::class, 'update'],['id' => $categoriaid]
        );*/
    }



}
    



