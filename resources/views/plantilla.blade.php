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
          <div class="row">
            <div class="col-md-3">
              <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="col-md-7">
              <input type="text" name="description" class="form-control" placeholder="Description">
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
              <th scope="col">Handle</th>
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
                  <td>@mdo</td>
                </tr>    
            @endforeach()
            
          </tbody>
        </table>
  </div>
@endsection