@extends('layouts.base')

@section('content')

    <h1>{{$usuario->name}}</h1>
    <h2>
        <a class="btn btn-primary"
            href="{{ route('usuario.index')}}">
            <---- Voltar
        </a>
    </h2>
    <p>

        <a href="mailto:{{$usuario->email}}">
            {{$usuario->email}}
        </a>

    </p>




@endsection

