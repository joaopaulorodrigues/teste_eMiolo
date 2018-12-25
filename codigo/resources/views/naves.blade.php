@extends('layouts.app')

@section('content')

    <!-- Modal -->
    <div class="modal fade" id="modalNave" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="nome-nave"></h5>

                </div>
                <div class="modal-body">

                    <p id="modelo"></p>
                    <p id="carga"> </p>
                    <p id="tripulantes"></p>
                    <p id="hyperdrive"></p>
                    <p id="comprimento"></p>
                    <p id="passengers"></p>
                    <p id="fabricante"></p>
                    <p id="velocidade"></p>
                    <p id="filmes"></p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Naves de Star Wars</div>
                <div class="limiter">
                    <div class="container-table100">
                        <div class="wrap-table100">
                            <div class="table100">
                                <table>
                                    <thead>
                                    <tr class="table100-head">
                                        <th class="column1">Modelo</th>
                                        <th class="column2">Nome da nave</th>
                                        <th class="column3">Fabricante</th>
                                        <th class="column4"></th>
                                    </tr>
                                    </thead>
                                    <tbody id="naves">



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

@section('scripts')
    <script src="{{ asset('js/naves.js') }}" defer></script>
@endsection
