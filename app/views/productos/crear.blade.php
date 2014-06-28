@extends('layouts.master')
 
@section('sidebar')
     @parent
     Formulario
@stop
 
@section('content')
        {{ HTML::link('productos', 'volver'); }}
        <h1>
  Crear Producto
      
    
  
</h1>
        {{ Form::open(array('url' => 'productos/crear')) }}
            {{Form::label('nombre_producto', 'Nombre Producto')}}
            {{Form::text('nombre_producto', '')}}
            {{Form::label('codigo_producto', 'Codigo Producto')}}
            {{Form::text('codigo_producto', '')}}
            {{Form::label('precio_neto', 'Precio Neto')}}
            {{Form::text('precio_neto', '')}}
            {{Form::label('fk_bodega_id','FK Bodega ID')}}
            {{Form::text('fk_bodega_id', '')}}
            {{Form::submit('Guardar')}}
        {{ Form::close() }}
@stop