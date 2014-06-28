@extends('layouts.master')
 
@section('sidebar')
     @parent
     Información de Producto
@stop
 
@section('content')
        {{ HTML::link('productos', 'Volver'); }}
        <h1>
  Bodega {{$producto->id}}
      
</h1>
        
        {{ $producto->nombre_producto .' '.$producto->precio_neto }}
        

@stop