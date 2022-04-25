@extends('layouts.app')
@section('title','productos')
@section('header')
<h2>Editar Producto</h2>
@stop

@section('content')
<hr>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Producto') }}</div>

                <div class="card-body">
      <form action="{{ url('/productos')}}" method="POST">
        @csrf
       
        <div class="mb-3">
        <label for="coduni" class="form-label">Código Único</label>
            <input type="text" class="form-control" id="coduni" name="coduni">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
        <select id="categorias_id" name="categorias_id" class="form-select" aria-label="Default select example">
        <option selected>Selecciona una categoría</option>
        <option value="1" >Poleras</option>
        <option value="2" >Polerón</option>
        <option value="3" >Pantalón</option>
         </select>
            
        </div>
        <div class="mb-3">
        <label for="desc" class="form-label">Descripción</label>
        <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea>
        </div>       
        <button type="submit" class="btn btn-primary">editar</button>
    </form>
    </div>
            </div>
        </div>
    </div>
   
</div>
<hr>
@stop