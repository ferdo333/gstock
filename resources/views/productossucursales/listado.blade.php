@extends('layouts.app')
@section('title','lista productos')
@section('header')
<h2>Listado de Productos por Sucursal</h2>
@stop


@section('content')
<hr>
<div class="row">

<form action="{{ url('buscar') }}" class="d-flex">
                    <input required class="form-control me-2" type="search" placeholder="Buscar por Código Unico de producto" aria-label="Search" name="search">
                 
                  
                    <button type="submit" class="btn btn-primary" >buscar</button> 
                    @if($errors->any())
                    <hr>
              <div class="alert alert-danger"><ul>@foreach($errors->all() as $error) 
                  <li>{{$error}}</li>
                  @endforeach
            </ul>
             </div>   
              @endif
                
                </form> 


     @foreach($productossucursales as $productosucursal)
    

    <div class="col-3">
       <div class="card" style="whdth:  20rem;">
       <div class="card-body">
           
           <h5 classs="card-title">{{$productosucursal->producto->nombre}}</h5>
           <h5 classs="card-title">{{$productosucursal->sucursal->nombre}}</h5>
           <h5 classs="card-title">Precio: $ {{$productosucursal->precio}}</h5>
           <h5 classs="card-title">Cantidad: {{$productosucursal->cantidad}}</h5>
          
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