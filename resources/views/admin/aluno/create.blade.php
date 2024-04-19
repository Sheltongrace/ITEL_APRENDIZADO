@extends('layout.admin.index')
@section('title', 'Cadastrar Alunos')
@section('content')
<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <h2 class="app-page-title">Registrar Alunos</h2>
            <!--//row-->
            <div class="row bg-white" id="regForm">
                <div class="col-lg-12">
                    <form>
                        <ul id="stepList" class="my-4">
                            <li class="step">1</li>
                            <li class="step">2</li>
                        </ul>
                        <!-- step 1 -->
                        <div class="tab">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="email mb-3">
                                        <label class="form-label my-2 fw-semibold" for="signup-email">Nome do Aluno</label>
                                        <input id="signup-name" name="user_name" type="text" class="form-control signup-name" placeholder="Nome" required="required" />
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="email mb-3">
                                        <label class="form-label my-2 fw-semibold" for="signup-email">Género</label>
                                        <input id="signup-email" name="signup-email" type="text" class="form-control signup-email" placeholder="Género" required="required" />
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
                                        <input id="signup-date" name="signup-dateBirthday" type="text" class="form-control signup-email" placeholder="Curso" required="required" />
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
                                    <button type="button" class="btn-primary btn prevBtn fw-bold" onclick="nextPrev(1)">
                                        Voltar
                                    </button>
                                </div>

                                <div>
                                    <button type="button" class="btn-primary btn nextBtn fw-bold" onclick="nextPrev(1)">
                                        Finalizar
                                    </button>
                                </div>
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
