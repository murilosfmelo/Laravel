@extends('layouts.base')

@section('content')

    <form action="{{ route('usuario.store') }}" method="post">
    {{-- é um tipo de ataque q o site sofre por robo --}}
        @csrf

    <div class="row">
        <div class="col-md-6">
            <label class="form-label"for="name">
                Nome*
            </label>
            <input class="form-control"type="text" name="name" id="name" required>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">E-mail*</label>
                <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="col-md-6"><label for="password" class="form-label">Senha*
            </label>
            <input type="password" name="password" id="passoword" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Confirmar senha*
                </label>
                <input type="password" name="" id="" class="form-control">
            </div>
        <div class="cow-md-2"><br>

                <input class="btn btn-success" type="submit" value="Cadastrar">

        </div>





     </div>


    </form>

@endsection
