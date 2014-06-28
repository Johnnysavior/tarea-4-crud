@extends('layouts.master')
 
@section('sidebar')
     @parent
     Información de Bodega
@stop
 
@section('content')
        {{ HTML::link('bodegas', 'Volver'); }}
        <h1>
  Bodega {{$bodega->id}}
      
</h1>
        
        {{ $bodega->nombre_bodega .' '.$bodega->codigo_bodega }}
        

@stop