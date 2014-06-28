@extends('layouts.master')
@section('sidebar')
    @parent
    Lista de Bodegas
    @stop

@section('content')
<h1>
	Bodegas
</h1>
   
    {{ HTML::link('bodegas/nueva', 'Crear Bodega'); }} <br>
     {{ HTML::link('bodegas/modificar', 'Editar Bodegas'); }}<br>
     {{ HTML::link('productos/', 'Eliminar un producto'); }}<br><br>
     {{ HTML::link('productos/', 'Ver Productos'); }}<br>
<ul>
@foreach($bodegas as $bodega)
<li>
	 {{ HTML::link( 'bodegas/'.$bodega->id ,'ID :'.$bodega->id.'. Nombre : '.$bodega->nombre_bodega.'. Codigo : '.$bodega->codigo_bodega ) }}
</li>
@endforeach
</ul>
@stop