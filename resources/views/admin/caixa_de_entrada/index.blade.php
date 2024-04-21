@extends('layout.admin.index')
@section('title', 'login/aluno')
@section('content')
<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Caixa de Mensagem</h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">

                    </div><!--//table-utilities-->
                </div><!--//col-auto-->
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
                                            <th class="cell">Email</th>
                                            <th class="cell">Assunto</th>
                                            <th class="cell">Mensagem</th>
                                            <th class="cell"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($contactos as $contacto)
                                        <tr>

                                            <td class="cell"><span class="truncate">{{$contacto->nome}}</span></td>
                                            <td class="cell">{{$contacto->email}}</td>
                                            <td class="cell"><span>{{$contacto->assunto}}</span></td>
                                            <td class="cell">{{$contacto->mensagem}}</td>
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
                                            <th class="cell">Nome</th>
                                            <th class="cell">Email</th>
                                            <th class="cell">Assunto</th>
                                            <th class="cell">Mensagem</th>
                                            <th class="cell"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat erat</span></td>
                                            <td class="cell">John Sanders</td>
                                            <td class="cell"><span>17 Oct</span><span class="note">2:16 PM</span></td>
                                            <td class="cell">$259.35</td>
                                            <td class="cell"><a class="btn-sm app-btn-secondary" href="{{ route('formador.show', 1) }}">Ver</a></td>
                                        </tr>

                                        <tr>

                                            <td class="cell"><span class="truncate">Pellentesque diam imperdiet</span></td>
                                            <td class="cell">Teresa Holland</td>
                                            <td class="cell"><span class="cell-data">16 Oct</span><span class="note">01:16 AM</span></td>
                                            <td class="cell">$123.00</td>
                                            <td class="cell"><a class="btn-sm app-btn-secondary" href="{{ route('formador.show', 1) }}">Ver</a></td>
                                        </tr>

                                        <tr>

                                            <td class="cell"><span class="truncate">Vestibulum a accumsan lectus sed mollis ipsum</span></td>
                                            <td class="cell">Jayden Massey</td>
                                            <td class="cell"><span class="cell-data">15 Oct</span><span class="note">8:07 PM</span></td>
                                            <td class="cell">$199.00</td>
                                            <td class="cell"><a class="btn-sm app-btn-secondary" href="{{ route('formador.show', 1) }}">Ver</a></td>
                                        </tr>


                                        <tr>

                                            <td class="cell"><span class="truncate">Morbi vulputate lacinia neque et sollicitudin</span></td>
                                            <td class="cell">Raymond Atkins</td>
                                            <td class="cell"><span class="cell-data">11 Oct</span><span class="note">11:18 AM</span></td>
                                            <td class="cell">$678.26</td>
                                            <td class="cell"><a class="btn-sm app-btn-secondary" href="{{ route('formador.show', 1) }}">Ver</a></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div><!--//table-responsive-->
                        </div><!--//app-card-body-->
                    </div><!--//app-card-->
                </div><!--//tab-pane-->

                <!-- Formadores Pendentes -->

                <!-- Cancelados -->

            </div><!--//tab-content-->

        </div><!--//container-fluid-->
    </div><!--//app-content-->


</div><!--//app-wrapper-->
@endsection
