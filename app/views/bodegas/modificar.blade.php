@extends('layouts.master')
 
@section('sidebar')
     @parent
     Formulario
@stop
 
@section('content')
        {{ HTML::link('bodegas', 'volver'); }}
        <h1>
  Modificar Bodega
      
    
  
</h1>
           {{ Form::open(array('url' => 'bodegas/modificar/enviar' )) }}
            {{Form::label('id', 'ID')}}
            {{Form::text('id')}}
            {{Form::label('nombre_bodega', 'Nombre Bodega')}}
            {{Form::text('nombre_bodega', '')}}
            {{Form::label('codigo_bodega', 'Codigo Bodega')}}
            {{Form::text('codigo_bodega', '')}}
            {{Form::submit('Modificar')}}
        {{ Form::close() }}
@stop