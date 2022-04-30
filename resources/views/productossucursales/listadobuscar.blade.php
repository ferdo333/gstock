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
           <h5 classs="card-title">{{$producto->nombre}}</h5>
           <h5 classs="card-title"> {{$producto->coduni}}</h5>
           <h5 classs="card-title">ID SUCURSAL {{$productosucursal->sucursales_id}}</h5>
           
           <div class="btn-group" role="group" aria-label="Basic mixed styles example">
           <div class="card-footer">    
                     
                   
                    </div>
                    </div>
                </div>
            </div>
           
       </div>
      
       @endforeach
       

       
    @stop