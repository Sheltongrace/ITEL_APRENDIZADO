@extends('layout.admin.index')
@section('title', 'Alunos')
@section('content')
<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Listagem dos Alunos</h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <form class="table-search-form row gx-1 align-items-center">
                                    <div class="col-auto">
                                        <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Procurar">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn app-btn-secondary">Pesquisar</button>
                                    </div>
                                </form>

                            </div><!--//col-->
                            <div class="col-auto">

                                <select class="form-select w-auto">
                                    <option selected value="option-1">All</option>
                                    <option value="option-2">Semana</option>
                                    <option value="option-3">Mês</option>
                                    <option value="option-4">Last 3 months</option>

                                </select>
                            </div>
                        </div><!--//row-->
                    </div><!--//table-utilities-->
                </div><!--//col-ato-->
            </div><!--//row-->


            <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
                <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Todos</a>
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
                                            <th class="cell">Nome</th>
                                            <th class="cell">Curso</th>
                                            <th class="cell">Data de Nascimento</th>
                                            <th class="cell">Visualizar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($alunos as $aluno)
                                            <tr>
                                                <td class="cell">{{ $aluno->user_name}}</td>
                                                <td class="cell">{{$aluno->nome_curso}}</td>
                                                <td class="cell">{{$aluno->created_at}}</td>
                                                <td class="cell"><a class="btn-sm app-btn-secondary" href="{{ route('admin.aluno.show', ['id'=>$aluno->id_usuario] ) }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
</svg></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
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
