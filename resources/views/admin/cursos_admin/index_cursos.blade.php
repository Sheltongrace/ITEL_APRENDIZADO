@extends('layout.admin.index')
@section('title', 'Cadastrar Alunos')
@section('content')

<main class="main">
  <div class="app-wrapper">
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
          <h2 class="app-page-title">Criar Cursos</h2>
          <div class="row bg-white" id="regForm">

            <div class="col-lg-10">
              <form>
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
                              for="signup-email"
                              >Nome do Curso</label
                            >
                            <input
                              id="signup-name"
                              name="signup-curso"
                              type="text"        
                              class="form-control signup-name"
                              placeholder="Nome do Curso"
                              required="required"
                            />
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
              </form>
            </div>
          </div>
        </div>
      </section>
</main>
@endsection
