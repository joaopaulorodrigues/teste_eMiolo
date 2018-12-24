@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dados do usuário</div>

                <p>Nome: {{$name}}</p>

                <p>Email: {{$email}}</p>

                <p>Data de Criação:  {{$criacao->format('d/m/Y')}}</p>

            </div>
        </div>
    </div>
</div>
@endsection
