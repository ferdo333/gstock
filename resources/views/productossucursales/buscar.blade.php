@extends('layouts.app')
@section('title','Bucar productos')
@section('header')
<h2>Busqueda </h2>
@stop


@section('content')
<hr>
<div class="row">
   
    
    <div class="col-3">
       <div class="card" style="whdth:  20rem;">
       <div class="card-body">
       <form action="{{ url('/mostrarProductosSucursales/{id}')}}" method="GET">
       @csrf
      
       <label for="id" class="form-label">Busqueda por ID.</label>
       <input type="number" class="form-control" id="id" name="id">


        
           <div class="btn-group" role="group" aria-label="Basic mixed styles example">
           <div class="card-footer">    
                     
           <button type="submit" class="btn btn-primary">buscar</button>
           </form>
                    </div>
                    </div>
                </div>
            </div>
           
       </div>
      
      
      
       
    @stop