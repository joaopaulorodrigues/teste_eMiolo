@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuários cadastrados</div>
                <div class="limiter">
                    <div class="container-table100">
                        <div class="wrap-table100">
                            <div class="table100">
                                <table>
                                    <thead>
                                    <tr class="table100-head">
                                        <th class="column1">ID</th>
                                        <th class="column2">Nome</th>
                                        <th class="column3">Email</th>
                                        <th class="column4">Data de criação</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="column1">{{ $user->id }}</td>
                                            <td class="column2">{{ $user->name }}</td>
                                            <td class="column3">{{ $user->email }}</td>
                                            <td class="column4">{{ $user->created_at->format('d/m/Y') }}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
