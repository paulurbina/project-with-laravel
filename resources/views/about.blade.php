@extends('welcome')

@section('seccion')
    <h1>Este es el equipo de trabajo</h1>

    @foreach ($equipo as $item)
        <a href="{{ route('nosotros', $item) }}" class="text-success">{{ $item }}</a><br>
    @endforeach

    @if (!empty($nombre))
        
        @switch($nombre)
            @case($nombre == 'tatiana')
                <h2>Este es {{ $nombre }}</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam animi recusandae itaque consequatur quam voluptates quas pariatur quo, quis nisi sed necessitatibus nihil nobis! Ex distinctio voluptatibus optio assumenda debitis?</p>
                @break
            @case($nombre == 'jimena')
                <h2>Este es {{ $nombre }}</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam animi recusandae itaque consequatur quam voluptates quas pariatur quo, quis nisi sed necessitatibus nihil nobis! Ex distinctio voluptatibus optio assumenda debitis?</p>
                @break
            @case($nombre == 'kevin')
                <h2>Este es {{ $nombre }}</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam animi recusandae itaque consequatur quam voluptates quas pariatur quo, quis nisi sed necessitatibus nihil nobis! Ex distinctio voluptatibus optio assumenda debitis?</p>
                @break
            @default
                
        @endswitch

    @endif

@endsection