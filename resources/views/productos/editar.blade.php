@extends('layouts.app')
@section('title','editar')
@section('header')
<h2>Editar Producto {{ $producto[0]->nombre }}</h2>
@stop

@section('content')
<hr>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Producto') }}</div>

                <div class="card-body">
      <form action="{{ url('/producto')}}" method="POST">
        @csrf
       
        <div class="mb-3">
        <label for="coduni" class="form-label">Código Único</label>
            <input type="text" class="form-control" id="coduni" name="coduni" value="{{ $producto[0]->coduni }}">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto[0]->nombre }}">
        </div>
        <div class="mb-3">
        <select id="categorias_id" name="categorias_id" class="form-select" aria-label="Default select example" value="{{ $producto[0]->categorias_id}}">
        <h5 classs="card-title"></h5>
        <option selected disabled>Seleccione una categoria</option>
        @foreach($categorias as $categoria)
        @if($producto[0]->categorias_id == $categoria->id)
        <option value="{{$categoria->id}}" selected>{{ $categoria->nombre }}</option>
        @else
        <option value="{{$categoria->id}}" >{{ $categoria->nombre }}</option>
        @endif
        @endforeach
         </select>
            
        </div>
        <div class="mb-3">
        <select id="estado" name="estado" class="form-select" aria-label="Default select example" value="{{ $producto[0]->estado }}">
        <option selected >{{ $producto[0]->estado}}</option>
        <option value="Activo" >Activo</option>
        <option value="Inactivo" >Inactivo</option>
         </select>
            
        <div class="mb-3">
        <label for="desc" class="form-label">Descripción</label>
        <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea>
        </div>     
        <input type="hidden" name="id" value="{{ $producto[0]->id }}"> 
        <button type="submit" class="btn btn-primary">editar</button>
    </form>
    </div>
            </div>
        </div>
    </div>
   
</div>
<hr>
@stop