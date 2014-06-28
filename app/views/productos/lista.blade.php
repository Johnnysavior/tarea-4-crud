@extends('layouts.master')
@section('sidebar')
    @parent
    Lista de Productos
    @stop

@section('content')
<h1>
	Productos
</h1>
   
    {{ HTML::link('productos/nuevo', 'Crear Producto'); }}<br>
      {{ HTML::link('productos/modificar', 'Editar Productos'); }}
      {{ HTML::link('bodegas/', 'Ver Bodegas'); }}<br>
<ul>
@foreach($productos as $producto)
<li>
	 {{ HTML::link( 'productos/'.$producto->id , $producto->nombre_producto.' '.$producto->precio_neto ) }}
</li>
@endforeach
</ul>
@stop