@extends('layout.admin.index')
@section('title', 'Cadastrar Alunos')
@section('content')

<main class="main">

    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h2 class="app-page-title">Registrar Alunos</h2>
            </div>

            <div class="col-lg-10">
                <form action="{{route('aluno.save')}}" method="post">
                    @csrf

                    <ul id="stepList" class="my-5">
                        <li class="step">1</li>
                        <li class="step">2</li>
                        <li class="step">3</li>
                    </ul>
                    <!-- step 1 -->
                    </ul>
                    <!-- step 1 -->
                    <div class="tab">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="email mb-3">
                                    @php
                                        print_r(Auth::user())
                                    @endphp


                                    <label class="form-label my-2 fw-semibold" for="signup-email">Nome do Aluno</label>
                                    <input id="signup-name" name="user_name" type="text" class="form-control signup-name" placeholder="Nome" required="required" />
                                </div>
                            </div>
                            <input type="text" value="estudante" name="categoria" style="display: none;">

                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="email mb-3">
                                    <label class="form-label my-2 fw-semibold" for="signup-email">Classe</label>

                                    <select id="signup-tel" name="classe" class="form-control signup-email">
                                        <option value="">Escolha uma opção</option>
                                        <option value="10">10ª</option>
                                        <option value="11">11ª</option>
                                        <option value="12">12ª</option>
                                        <option value="13">13ª</option>
                                    </select>

                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="email mb-3">
                                    <label class="form-label my-2 fw-semibold" for="signup-email">Número de Processo</label>
                                    <input id="signup-email" name="processo" type="text" class="form-control signup-email valid" placeholder="Processo" required="required" />
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="email mb-3">
                                    <label class="form-label my-2 fw-semibold" for="signup-email">Curso</label>

                                    <select id="signup-tel" name="id_curso" class="form-control signup-email">
                                        <option value="">Escolha um curso</option>
                                        @foreach($todosCurso as $curso)
                                        <option value="{{$curso->id_curso}}">{{$curso->nome_curso}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="d-flex justify-content-between mt-3">
                            <div>
                                <button type="button" class="btn-primary btn nextBtn fw-bold" onclick="nextPrev(1)">
                                    Próximo
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="tab">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="email mb-3">
                                    <label class="form-label my-2 fw-semibold" for="signup-email">Telefone</label>
                                    <input id="signup-tel" name="N_telemovel" type="tel" class="form-control signup-email" placeholder="+244 xxxxxx" required="required" maxlength="9" />
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="email mb-3">
                                    <label class="form-label my-2 fw-semibold" for="signup-email">Morada</label>
                                    <input id="signup-tel" name="morada" type="text" class="form-control signup-email" placeholder="Morada" required="required" />
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="email mb-3">
                                    <label class="form-label my-2 fw-semibold" for="signup-email">BI</label>
                                    <input id="signup-tel" name="identificador_fiscal" type="text" class="form-control signup-email valid" placeholder="BI ou Identificador Fiscal" required="required" />
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="email mb-3">
                                    <label class="form-label my-2 fw-semibold" for="signup-email">Email</label>
                                    <input id="signup-tel" name="email" type="text" class="form-control signup-email" placeholder="email@exemplo.com" required="required" />
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-3">
                        <div>
                    <button type="button" class="btn-primary btn prevBtn fw-bold" onclick="nextPrev(-1)">
                      Voltar
                    </button>
                  </div>
                            <div>
                                <button type="button" class="btn-primary btn nextBtn fw-bold" onclick="nextPrev(1)">
                                    Próximo
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- step 3 -->


                    <div class="tab">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="email mb-3">
                                    <label class="form-label my-2 fw-semibold" for="signup-email">Género</label>
                                    <select id="signup-tel" name="genero" class="form-control signup-email">
                                        <option value="1">Escolha uma opção</option>
                                        <option value="2">Mascolino</option>
                                        <option value="3">Femenino</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="email mb-3">
                                    <label class="form-label my-2 fw-semibold" for="signup-email">Senha</label>
                                    <input id="signup-tel" name="senha" type="password" class="form-control signup-email valid" placeholder="Password" required="required" />
                                </div>
                            </div>


                            <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                    <button type="button" class="btn-primary btn prevBtn fw-bold" onclick="nextPrev(-1)">
                      Voltar
                    </button>
                  </div>

                                <div>
                                    <button type="submit" class="btn-primary btn nextBtn fw-bold">
                                        Salvar
                                    </button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </section>
    @endsection
