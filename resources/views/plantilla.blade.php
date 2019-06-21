@extends('welcome')

@section('seccion')
  <div class="container mt-4">
      <h1 class="display-4">
          Notas
      </h1>

        @if (session('mensaje'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('mensaje') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        @endif

        <form action="{{ route('notas.crear') }}" method="POST" class="pb-3">
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
              <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ old('nombre')}}">
            </div>
            <div class="col-md-7">
              <input type="text" name="description" class="form-control" placeholder="Description" value="{{ old('description') }}">
            </div>
            <div class="col-md-2">
              <button class="btn btn-primary btn-block" type="submit">Agregar</button>
            </div>
          </div>
        </form>

      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Accion</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($notas as $item)
                <tr>
                <th scope="row">{{ $item->id }}</th>
                  <td>
                    <a href="{{ route('notas.detalle', $item) }}">
                      {{ $item->nombre }}
                    </a>
                  </td>
                  <td>{{ $item->description }}</td>
                  <td class="row">
                    <div class="col-md-4 offset-xs-5">
                        <a href="{{ route('notas.editar', $item) }}" class="btn btn-warning btn-sm">Editar</a>
                    </div>
                    <div class="col-xs-12">
                      <form action="{{ route('notas.eliminar', $item) }}" method="POST">
                          @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                      </form>
                    </div>
                  </td>
                </tr>    
            @endforeach()
            
          </tbody>
        </table>

        {{ $notas->links() }}
  </div>
@endsection