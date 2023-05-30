
@extends('layouts.base')

@section('content')

<h1>Usuários</h1>
<p>
{{$usuarios->links();}}
</p>

<table class="table table-border table-striped">

    <thead>

        <tr>
            Ações
        </tr>
        <tr>
            Nome
        </tr>
        <tr>
            Email
        </tr>
        <th>
            Criado em
        </th>

    </thead>

    <tbody>
        @foreach ($usuarios as $usuario)


        <tr>
            <td></td>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->created_at->format('d/m/Y')}}</td>
        </tr>
     @endforeach
    </tbody>

</table>

@endsection

