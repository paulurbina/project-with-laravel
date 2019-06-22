@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>
                            <strong class="h4">{{ auth()->user()->name }}</strong>, estos son tus notas
                        </span>
                        <a href="/notas/create" class="btn btn-primary btn-sm">Nueva nota</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notas as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->descripcion }}</td>
                                        <td>Acción</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $notas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection