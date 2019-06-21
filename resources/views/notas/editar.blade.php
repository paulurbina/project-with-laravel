@extends('welcome')

@section('seccion')
<h2 class="pb-5 pt-5">Nota a editar: {{ $nota->nombre }} -- id -- {{ $nota->id }}</h2>

@if (session('mensajeUpdate'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p style="margin:0px;">{{ session('mensajeUpdate') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<form action="{{ route('notas.update', $nota->id) }}" method="POST" class="pb-3">
    @method('PUT')
    @csrf

    @error('nombre')
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <p style="margin:0px;">El nombre es obligatorio</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @enderror

    @error('description')
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <p style="margin: 0px;">Es importante la descripcion!</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @enderror


    <div class="row">
      <div class="col-md-3">
        <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $nota->nombre }}">
      </div>
      <div class="col-md-7">
        <input type="text" name="description" class="form-control" placeholder="Description" value="{{ $nota->description }}">
      </div>
      <div class="col-md-2">
        <button class="btn btn-warning btn-block" type="submit">Actualizar</button>
      </div>
    </div>
  </form>

@endsection