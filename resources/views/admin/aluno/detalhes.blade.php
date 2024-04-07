@extends('layout.admin.index')
@section('title', 'Detalhes Aluno')
@section('content')
<div class="app-wrapper">
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
          <h1 class="app-page-title">Perfil</h1>

          <div class="row gy-4">
            <div class="col-12 col-lg-6">
              <div
                class="app-card app-card-account shadow-sm d-flex flex-column align-items-start"
              >
                <div class="app-card-header p-3 border-bottom-0">
                  <div class="row align-items-center gx-3">
                    <div class="col-auto">
                      <div class="app-icon-holder">
                        <svg
                          width="1em"
                          height="1em"
                          viewBox="0 0 16 16"
                          class="bi bi-person"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"
                          />
                        </svg>
                      </div>
                      <!--//icon-holder-->
                    </div>
                    <!--//col-->
                    <div class="col-auto">
                      <h4 class="app-card-title">Dados Alunos</h4>
                    </div>
                    <!--//col-->
                  </div>
                  <!--//row-->
                </div>
                <!--//app-card-header-->
                <div class="app-card-body px-4 w-100">
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label mb-2">
                          <strong>Disciplina</strong>
                        </div>
                        <div class="item-data">
                            TREI
                        </div>
                      </div>
                      <!--//col-->
                    </div>
                    <!--//row-->
                  </div>
                  <!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Nome</strong></div>
                        <div class="item-data">James Doe</div>
                      </div>
                      <!--//col-->
                    </div>
                    <!--//row-->
                  </div>
                  <!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Email</strong></div>
                        <div class="item-data">james.doe@website.com</div>
                      </div>
                      <!--//col-->
                    </div>
                    <!--//row-->
                  </div>
                  <!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Website</strong></div>
                        <div class="item-data"></div>
                      </div>
                      <!--//col-->
                    </div>
                    <!--//row-->
                  </div>
                  <!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Localização</strong></div>
                        <div class="item-data">Rangel</div>
                      </div>
                      <!--//col-->
                    </div>
                    <!--//row-->
                  </div>
                  <!--//item-->
                </div>
                <!--//app-card-body-->
                <div class="app-card-footer p-4 mt-auto">
                  <a class="btn app-btn-secondary" href="./listTeachers.html"
                    >Voltar</a
                  >
                  <button class="btn app-btn-secondary" href="#">
                    Aprovar
                  </button>
                </div>
                <!--//app-card-footer-->
              </div>
              <!--//app-card-->
            </div>
            <!--//col-->

            <div class="col-12 col-lg-6">
              <div
                class="app-card app-card-account shadow-sm d-flex flex-column align-items-start"
              >
                <div class="app-card-header p-3 border-bottom-0">
                  <div class="row align-items-center gx-3">
                    <div class="col-auto">
                      <div class="app-icon-holder">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                          <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5"/>
                          <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96q.04-.245.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 1 1 12z"/>
                        </svg>
                      </div>
                      <!--//icon-holder-->
                    </div>
                    <!--//col-->
                    <div class="col-auto">
                      <h4 class="app-card-title">Solicitação de aluno</h4>
                    </div>
                    <!--//col-->
                  </div>
                  <!--//row-->
                </div>
                <!--//app-card-header-->
                <div class="app-card-body px-4 w-100">
                  
                  <!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Assunto</strong></div>
                        <div class="item-data">
                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi cum modi repudiandae adipisci? Rerum, in!
                        </div>
                      </div>
                      <!--//col-->
                    </div>
                    <!--//row-->
                  </div>

                  <!--//item-->
                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div
                        class="col-auto d-flex justify-content-center flex-column"
                      >
                        <div class="item-label"><strong>Aceitar</strong></div>
                        <div class="form-check form-switch mb-3">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            id="settings-switch-2"
                          />
                        </div>
                      </div>
                      <!--//col-->
                    </div>
                    <!--//row-->
                  </div>

                  <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <div class="item-label"><strong>Estado</strong></div>
                        <div class="item-data">Aceite</div>
                      </div>
                      <!--//col-->
                    </div>
                    <!--//row-->
                  </div>
                  <!--//item-->
                </div>
                <!--//app-card-body-->
              </div>
              <!--//app-card-->
            </div>
            <!--//col-->
          </div>
          <!--//row-->
        </div>
        <!--//container-fluid-->
      </div>
      <!--//app-content-->
    </div>
    <!--//app-wrapper-->
