@extends('layout.admin.index')
@section('title', 'Cadastrar disciplinas')
@section('content')

  <div class="app-wrapper">
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
          <h2 class="app-page-title">Criar Disciplinas</h2>
          <div class="row bg-white" id="regForm">
            <div class="col-lg-10">
              
                <ul id="stepList" style="text-align: center;" class="my-5">
                  <li class="step" >1</li>
                </ul>
                    <!-- step 1 -->
                    <div class="tab">
                      <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                          <div class="email mb-3">
                            <label
                              class="form-label my-2 fw-semibold"
                              for="signup-email">Nome da Disciplina</label>
                            <input
                              id="signup-name"
                              name="signup-disciplina"
                              type="text"        
                              class="form-control signup-name"
                              placeholder="Nome da Disciplina"
                              required="required"
                            />
                          </div>
                        </div>

						<div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="email mb-3">
                      <label class="form-label my-2 fw-semibold" for="signup-email">imagem</label>
                      <input id="signup-email" name="imagem" type="file" class="form-control signup-email valid" placeholder="Nível académico" required="required">
                    </div>
                  </div>
				  
                    <div>
                      <button
                        type="button"
                        class="btn-primary btn nextBtn fw-bold"
                        onclick="nextPrev(1)"
                      >
                        Criar
                      </button>
                    </div>
                  </div>
                </div>
        
            </div>
          </div>
        </div>
@endsection
