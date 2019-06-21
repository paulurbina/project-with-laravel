@extends('welcome')

@section('seccion')
    
    <h1>Detalle de nota:</h1>
    <h4>Nombre: {{ $nota->nombre }}</h4>
    <p><strong>Detalle: </strong> {{ $nota->description }} </p><hr>
    <p><strong>Id: </strong> {{ $nota->id }} </p>

@endsection