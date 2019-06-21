@extends('welcome')

@section('seccion')
  <div class="container mt-4">
      <h1 class="display-4">
          Notas
      </h1>

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