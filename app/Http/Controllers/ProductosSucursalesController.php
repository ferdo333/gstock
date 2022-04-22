<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosSucursalesController extends Controller
{
    
    public function index(){
        $productoscontrollers = Productosucursal::get();

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
        $producto->save();

        //obtenemos registros
        $productos = Producto::get();

        //enviamos a la vista principal
        return view('productos/listado', [
            'productos' => $productos
        ]);
    }
}
