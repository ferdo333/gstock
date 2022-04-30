@extends('layouts.app')
@section('title','lista productos')
@section('header')
<h2>Listado </h2>
@stop


@section('content')
<hr>
<div class="row">
   
     @foreach($productos as $producto)

    <div class="col-3">
       <div class="card" style="whdth:  20rem;">
       <div class="card-body">
           <h5 classs="card-title">{{$producto->nombre}}</h5>
           <h5 classs="card-title">Código único: {{$producto->coduni}}</h5>
           <h5 classs="card-title">ID: {{$producto->id}}</h5>
           <div class="btn-group" role="group" aria-label="Basic mixed styles example">
           <div class="card-footer">    
    <!--<a href="/editarProductos/{{ $producto->id }}" type="button" class="btn btn-success">Editar</a>-->
                        <a href="/eliminarProductos/{{ $producto->id }}" role="button" class="btn btn-danger" data-toggle="modal">Eliminar</a>
                    </div>
                    </div>
                </div>
            </div>
           
       </div>
      
       @endforeach
      

       
    @stop