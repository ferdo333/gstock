@extends('layouts.app')
@section('title','lista productos')
@section('header')
<h2>Listado </h2>
@stop


@section('content')
<hr>
<div class="row">
    @foreach ($productos as $producto)
    <div class="col-3">
       <div class="card" style="whdth:  20rem;">
       <div class="card-body">
           <h5 classs="card-title">{{$producto->nombre}}</h5>
           <h5 classs="card-title">{{$producto->coduni}}</h5>
</div>
       </div>
       </div>
      
       @endforeach
       </div>
    @stop