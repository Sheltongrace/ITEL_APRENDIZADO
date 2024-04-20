@extends('layout.admin.index')
@section('title', 'Marcações')
@section('content')
<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Marcações</h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <form class="table-search-form row gx-1 align-items-center">

                                </form>

                            </div><!--//col-->
                            <div class="col-auto">

                                <select class="form-select w-auto">
                                    <option selected value="option-1">Todos</option>
                                    <option value="option-2">Hoje</option>
                                    <option value="option-3">A uma semana</option>
                                    <option value="option-4">A um Mês atrás</option>
                                    <option value="option-4">A dois Mêses atrás</option>

                                </select>
                            </div>
                        </div><!--//row-->
                    </div><!--//table-utilities-->
                </div><!--//col-auto-->
            </div><!--//row-->


            <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
                <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Todos</a>
                <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Aprovados</a>
                <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Pendentes</a>
                <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Cancelledos</a>
            </nav>


            <div class="tab-content" id="orders-table-tab-content">
                <!-- Listas de todos os formadores -->
                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                        <tr>
                                            <th class="cell">Aluno</th>
                                            <th class="cell">Telefone</th>
                                            <th class="cell">Disciplina</th>
                                            <th class="cell">Data do Registro</th>
                                            <th class="cell">Estado</th>
                                            <th class="cell"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($marcacaoAulas as $marcacao)
                                        <tr>
                                            <td>{{ $marcacao->user_name}}</td>
                                            <td>{{$marcacao->N_telemovel}}</td>
                                            <td>{{$marcacao->nome_disciplina}}</td>
                                            <td>{{$marcacao->marcacao_created_at}}</td>
                                            <td>{{$marcacao->estado}}</td>

                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div><!--//table-responsive-->

                        </div><!--//app-card-body-->
                    </div><!--//app-card-->


                </div><!--//tab-pane-->

                <!-- Formadores Aprovados -->
                <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
                    <div class="app-card app-card-orders-table mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">

                                <table class="table mb-0 text-left">
                                    <thead>
                                        <tr>
                                            <th class="cell">Aluno</th>
                                            <th class="cell">Telefone</th>
                                            <th class="cell">Email</th>
                                            <th class="cell">Data do Registro</th>
                                            <th class="cell">Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($marcacaoAulas as $marcacao)
                                        @if($marcacao->estado==="aprovado")
                                        <tr>
                                            <td>{{ $marcacao->user_name}}</td>
                                            <td>{{$marcacao->N_telemovel}}</td>
                                            <td>{{$marcacao->nome_disciplina}}</td>
                                            <td>{{$marcacao->marcacao_created_at}}</td>
                                            <td>{{$marcacao->estado}}</td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!--//table-responsive-->
                        </div><!--//app-card-body-->
                    </div><!--//app-card-->
                </div><!--//tab-pane-->

                <!-- Formadores Pendentes -->
                <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
                    <div class="app-card app-card-orders-table mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 text-left">
                                    <thead>
                                        <tr>
                                            <th class="cell">Aluno</th>
                                            <th class="cell">Telefone</th>
                                            <th class="cell">Email</th>
                                            <th class="cell">Data do Registro</th>
                                            <th class="cell">Estado</th>
                                        </tr>
                                    </thead>
                                    @if($marcacao->estado==="pendente")
                                    <tr>
                                        <td>{{ $marcacao->user_name}}</td>
                                        <td>{{$marcacao->N_telemovel}}</td>
                                        <td>{{$marcacao->nome_disciplina}}</td>
                                        <td>{{$marcacao->marcacao_created_at}}</td>
                                        <td>{{$marcacao->estado}}</td>
                                    </tr>
                                    @endif
                                </table>
                            </div><!--//table-responsive-->
                        </div><!--//app-card-body-->
                    </div><!--//app-card-->
                </div><!--//tab-pane-->

                <!-- Cancelados -->
                <div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
                    <div class="app-card app-card-orders-table mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 text-left">
                                    <thead>
                                        <tr>
                                            <th class="cell">Aluno</th>
                                            <th class="cell">Telefone</th>
                                            <th class="cell">Email</th>
                                            <th class="cell">Data do Registro</th>
                                            <th class="cell">Estado</th>
                                        </tr>
                                    </thead>
                                    @if($marcacao->estado==="cancelados")
                                    <tr>
                                        <td>{{ $marcacao->user_name}}</td>
                                        <td>{{$marcacao->N_telemovel}}</td>
                                        <td>{{$marcacao->nome_disciplina}}</td>
                                        <td>{{$marcacao->marcacao_created_at}}</td>
                                        <td>{{$marcacao->estado}}</td>
                                    </tr>
                                    @endif
                                </table>
                            </div><!--//table-responsive-->
                        </div><!--//app-card-body-->
                    </div><!--//app-card-->
                </div><!--//tab-pane-->
            </div><!--//tab-content-->



        </div><!--//container-fluid-->
    </div><!--//app-content-->


</div><!--//app-wrapper-->
@endsection
