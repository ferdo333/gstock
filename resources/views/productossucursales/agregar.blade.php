@extends('layouts.app')
@section('title','productos sucursales')
@section('header')
<h2>Agregar Nuevo Producto en la Sucursal</h2>
@stop

@section('content')
<hr>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Agregar Producto ') }}</div>

                <div class="card-body">

      <form action="{{ url('/productossucursales')}}" method="POST">
        @csrf
      
        <div class="mb-3">
        <label for="productos_id" class="form-label">Id de producto</label>
            <input type="number" class="form-control" id="productos_id" name="productos_id">
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio">
        </div>
        <div class="mb-3">
        <select id="sucursales_id" name="sucursales_id" class="form-select" aria-label="Default select example">
        <option selected>Selecciona una Sucursal</option>
        <option value="1" >Mall Alto Las Condes</option>
        <option value="2" >Mall Vivo Panoramico</option>
        <option value="3" >Mall Plaza Oeste</option>
         </select>
            
        </div>
        <div class="mb-3">
        <label for="cantidad" class="form-label">Cantidad </label>
        <input type="number" class="form-control" id="cantidad" name="cantidad">
        </div>       
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
    </div>
            </div>
        </div>
    </div>
</div>
<hr>
@stop