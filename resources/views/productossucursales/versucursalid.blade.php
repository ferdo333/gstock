@extends('layouts.app')
@section('title','Sucursal x Producto')
@section('header')
<h2>Datos de sucursal consultados por ID </h2>
@stop


@section('content')
<hr>
<div class="row">
 
     @foreach($productossucursales as $productosucursal)
    

    <div class="col-3">
       <div class="card" style="whdth:  20rem;">
       <div class="card-body">
           
           <h5 classs="card-title">{{$productosucursal->producto->nombre}}</h5>
           <h5 classs="card-title">{{$productosucursal->sucursal->nombre}}</h5>
           
          
           <div class="btn-group" role="group" aria-label="Basic mixed styles example">
           <div class="card-footer">    
                     
                      
                    </div>
                    </div>
                </div>
            </div>
     
       </div>
      
       @endforeach
      
    

       
    @stop