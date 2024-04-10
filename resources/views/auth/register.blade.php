@extends('layout.auth.index')
@section('title', 'Login')
@section('content')
<div class="row g-0 app-auth-wrapper">
    <div class="col-12 col-md-12 col-lg-7 auth-main-col text-center p-5">
        <div class="d-flex flex-column align-content-end">
            <div class="app-auth-body mx-auto">
                <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo"></a></div>
                <h2 class="auth-heading text-center mb-4">Candidatar-se para formador</h2>
                <div class="auth-form-container text-start mx-auto" id="regForm">
                    @if(isset($success))
                    <div class="alert alert-success">
                        {{ $success }}
                    </div>
                    @endif

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

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="email mb-3">
                                        <label class="form-label my-2 fw-semibold" for="signup-email">imagem</label>
                                        <input id="signup-email" name="imagem" type="file" class="form-control signup-email valid" placeholder="Nível académico" required="required">
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
                                        <input id="signup-tel" name="N_telemovel" type="number" class="form-control signup-email" placeholder="+244 xxxxxx" required="required" maxlength="9">
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
                    <div class="auth-option text-center pt-5">Já tens uma conta ?<a class="text-link" href="./index.html">faça o log in</a></div>
                </div><!--//auth-form-container-->
            </div><!--//auth-body-->
        </div><!--//flex-column-->
    </div><!--//auth-main-col-->
    <div class="col-12 col-md-3 d-md-none d-lg-block col-lg-5 h-100 auth-background-col">
        <div class="auth-background-holder">
        </div>
        <div class="auth-background-mask"></div>
        <div class="auth-background-overlay p-3 p-lg-5">
            <div class="d-flex flex-column align-content-end h-100">
                <div class="h-100"></div>
                <div class="overlay-content p-3 p-lg-4 rounded">
                    <h5 class="mb-3 overlay-title fs-4">Aprendendo Hoje,
                        Liderando Amanhã</h5>
                    <p class="fs-5">Faça Parte da Revolução Educacional:
                        Aprenda com os Melhores e Seja um Líder em sua Área</p>
                </div>
            </div>
        </div><!--//auth-background-overlay-->
    </div><!--//auth-background-col-->

</div><!--//row-->
@endsection