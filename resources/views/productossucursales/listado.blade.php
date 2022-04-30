@extends('layouts.app')
@section('title','lista productos')
@section('header')
<h2>Listado </h2>
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
                     
                        <a href="/eliminarProductosSucursales/{{ $productosucursal->id }}" role="button" class="btn btn-danger" data-toggle="modal">Dar de baja</a>
                    </div>
                    </div>
                </div>
            </div>
     
       </div>
      
       @endforeach
      
    

       
    @stop