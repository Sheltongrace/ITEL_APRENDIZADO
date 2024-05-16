@extends('layout.admin.index')
@section('title', 'Editar RegistroFormadores')
@section('content')

<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <h2 class="app-page-title">Editar Registro</h2>
            <!--//row-->
            <div class="row bg-white" id="regForm">
                <div class="col-lg-12">
                    <form method="post" action="{{route('formador.save')}}" enctype="multipart/form-data">
                        @csrf
                        <ul id="stepList" class="my-5">
                            <li class="step">1</li>
                            <li class="step">2</li>
                            <li class="step">3</li>
                        </ul>
                        <!-- step 1 -->
                        <div class="tab">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="email mb-3">
                                        <label class="form-label my-2 fw-semibold" for="signup-email">Nome Completo</label>
                                        <input id="signup-name" name="user_name" type="text" class="form-control signup-name" placeholder="Primeiro nome">
                                    </div>
                                </div>


                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="gender mb-3">
                                        <label class="form-label my-2 fw-semibold" for="gender">Gênero</label>
                                        <select id="gender" name="genero" class="form-control">
                                            <option value="">Selecione o gênero</option>
                                            <option value="masculino">Masculino</option>
                                            <option value="feminino">Feminino</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="email mb-3">
                                        <label class="form-label my-2 fw-semibold" for="signup-email">Nível académico</label>
                                        <input  name="nivel_academico" type="text" class="form-control " placeholder="Nível académico">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="email mb-3">
                                        <label class="form-label my-2 fw-semibold" for="signup-email">Imagem</label>
                                        <input  name="imagem" type="file" class="form-control " placeholder="Nível académico">
                                    </div>
                                </div>

                                <input type="text" value="formador" name="categoria" style="display: none;">
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
                                        <input id="signup-tel" name="N_telemovel" type="tel" class="form-control signup-email" placeholder="+244 xxxxxx" maxlength="9">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="email mb-3">
                                        <label class="form-label my-2 fw-semibold" for="signup-email">Morada</label>
                                        <input id="signup-tel" name="morada" type="text" class="form-control " placeholder="Morada">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="email mb-3">
                                        <label class="form-label my-2 fw-semibold" for="signup-email">BI ou Identificador Fiscal</label>
                                        <input id="signup-tel" name="identificador_fiscal" type="text" class="form-control " placeholder="BI ou Identificador Fiscal">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="email mb-3">
                                        <label class="form-label my-2 fw-semibold" for="signup-email">Email</label>
                                        <input id="signup-tel" name="email" type="text" class="form-control signup-email" placeholder="email@exemplo.com">
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
                            <div class="row flex-row-reverse">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="email mb-3">
                                        <label class="form-label my-1 fw-semibold" for="signup-email">Carga horária</label>
                                        <select id="signup-tel" name="tempo_disponivel" class="form-control signup-email">
                                            <option>Manhã</option>
                                            <option>Tarde</option>
                                            <option>Noite</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="password mb-3">
                                        <label class="form-label fw-semibold" for="signup-password">Disciplina a lecionar</label>
                                        <select id="signup-tel" name="disciplina" class="form-control signup-email">
                                            @foreach($todasDisciplina as $disciplina)
                                                 <option>{{$disciplina->nome_disciplina}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <label for="" class="label-form my-2">Porquê quer ser formador ?</label>
                                    <textarea name="descricao" id="" cols="30" rows="10" class="form-control" placeholder="Descreva o porquê quer ser formador ?"></textarea>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <button type="button" class="btn-primary btn prevBtn fw-bold" onclick="nextPrev(n)">
                                        Voltar
                                    </button>
                                </div>

                                <div>
                                    <button type="submit" class="btn-primary btn nextBtn fw-bold">
                                        Editar
                                    </button>
                                </div>
                            </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
        <!--//container-fluid-->
    </div>

</div>
<!--//app-wrapper-->
@endsection
