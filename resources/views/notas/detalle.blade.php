@extends('welcome')

@section('seccion')
    
    <h1>Detalle de nota:</h1>
    <p><strong>Id: </strong> {{ $nota->id }} -- Fecha de creacion:  {{$nota->created_at}}</p>
    <h4>Nombre: {{ $nota->nombre }}</h4>
    <p><strong>Detalle: </strong> {{ $nota->description }} </p><hr>

@endsection