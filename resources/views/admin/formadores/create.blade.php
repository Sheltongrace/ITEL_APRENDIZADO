@extends('layout.admin.index')
@section('title', 'Formadores')
@section('content')

<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <h2 class="app-page-title">Registrar Formador</h2>
            <!--//row-->
            <div class="row bg-white" id="regForm">
                <div class="col-lg-12">
                    <form method="post" action="{{route('formador.save')}}">
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
                                        <input id="signup-name" name="user_name" type="text" class="form-control signup-name" placeholder="Primeiro nome" required="required">
                                    </div>
                                </div>


                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="gender mb-3">
                                        <label class="form-label my-2 fw-semibold" for="gender">Gênero</label>
                                        <select id="gender" name="genero" class="form-control" required="required">
                                            <option value="">Selecione o gênero</option>
                                            <option value="masculino">Masculino</option>
                                            <option value="feminino">Feminino</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="email mb-3">
                                        <label class="form-label my-2 fw-semibold" for="signup-email">Nível académico</label>
                                        <input id="signup-email" name="nivel_academico" type="text" class="form-control signup-email valid" placeholder="Nível académico" required="required">
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
                                        <input id="signup-tel" name="N_telemovel" type="tel" class="form-control signup-email" placeholder="+244 xxxxxx" required="required" maxlength="9">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="email mb-3">
                                        <label class="form-label my-2 fw-semibold" for="signup-email">Morada</label>
                                        <input id="signup-tel" name="morada" type="text" class="form-control signup-email" placeholder="Morada" required="required">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="email mb-3">
                                        <label class="form-label my-2 fw-semibold" for="signup-email">BI ou Identificador Fiscal</label>
                                        <input id="signup-tel" name="identificador_fiscal" type="text" class="form-control signup-email valid" placeholder="BI ou Identificador Fiscal" required="required">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="email mb-3">
                                        <label class="form-label my-2 fw-semibold" for="signup-email">Email</label>
                                        <input id="signup-tel" name="email" type="text" class="form-control signup-email" placeholder="email@exemplo.com" required="required">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <button type="button" class="btn-primary btn prevBtn fw-bold" onclick="nextPrev(1)">
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
                                        <label class="form-label fw-semibold" for="signup-password">Senha</label>
                                        <input id="signup-password" name="signup-password" type="password" class="form-control signup-password" placeholder="xxxxxxxxxxx" required="required">
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
                                        Finalizar
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