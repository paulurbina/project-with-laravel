@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Agregar Nota</span>
                        <a href="/notas" class="btn btn-primary btn-sm">Listar tus notas</a>
                    </div>
                    <div class="card-body">     
                            @if ( session('mensaje') )
                              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <p>{{ session('mensaje') }}</p>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                            @endif
                            <form method="POST" action="/notas">
                              @csrf
                              <input
                                type="text"
                                name="nombre"
                                placeholder="Nombre"
                                class="form-control mb-2"
                              />
                              <input
                                type="text"
                                name="description"
                                placeholder="Descripcion"
                                class="form-control mb-2"
                              />
                              <button class="btn btn-primary btn-block" type="submit">Agregar</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection