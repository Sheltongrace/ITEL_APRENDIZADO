@extends('layout.admin.index')
@section('title', 'Disciplinas')
@section('content')
<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Disciplinas</h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">


                        </div><!--//col-->
                    </div><!--//row-->
                </div><!--//table-utilities-->
            </div><!--//col-auto-->
        </div><!--//row-->





        <div class="tab-content" id="orders-table-tab-content">
            <!-- Listas de todos os formadores -->
            <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                <div class="app-card app-card-orders-table shadow-sm mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="cell">Disciplinas</th>
                                        <th class="cell">Preco</th>
                                        <th class="cell">Editar</th>
                                        <th class="cell">Deletar</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($todasDiscipliona as $disc)
                                    <tr>
                                        <td class="cell">{{$disc->nome_disciplina}}</td>
                                        <td class="cell">{{$disc->preco}}</td>
                                        <div>
                                            </class>
                                            <td class="cell"> <a class="btn btn-primary" href="{{ route('disciplina.edit',['id'=>$disc->id_disciplina]) }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0
  1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.
  5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                                    </svg></a></td>
                                        </div>



                                        <div>
                                            </class>
                                            <td class="cell"> <a class="btn btn-danger" data-toggle="modal" data-target="#confirmDeleteModal{{$disc->id_disciplina}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1
   0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0
    .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.
    5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                                    </svg></a></td>
                                        </div>
                                        <div class="modal fade" id="confirmDeleteModal{{$disc->id_disciplina}}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel{{$disc->id_disciplina}}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Eliminação</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Você realmente deseja eliminar este curso?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                                                        <a type="button" class="btn btn-danger" href="{{ route('admin.disciplina.destroy',['id'=>$disc->id_disciplina]) }}">Eliminar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </tr>
                                    @endforeach



                                </tbody>
                            </table>
                        </div><!--//table-responsive-->

                    </div><!--//app-card-body-->
                </div><!--//app-card-->


            </div><!--//tab-pane-->
            <!-- Formadores Pendentes -->
        </div><!--//tab-content-->

    </div><!--//container-fluid-->
</div><!--//app-content-->


</div><!--//app-wrapper-->


@endsection
