@extends('layout.admin.index')  
@section('title', 'Painel')
@section('content')
<div class="app-wrapper">
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
          <h1 class="app-page-title">Painel</h1>

          <div
            class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration"
            role="alert"
          >
            <div class="inner">
              <div class="app-card-body p-3 p-lg-4">
                <h3 class="mb-3">Shelton</h3>
                <div class="row gx-5 gy-3">
                  <div class="col-12 col-lg-9">
                    <p id="teste" data-bs-toggle="modal" data-bs-target="#bg_modal">
                       Bem vindo a tela do administrador  
                    </p>
                  </div>
                  <!--//col-->
              
                  <!--//col-->
                </div>
                <!--//row-->
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="alert"
                  aria-label="Close"
                ></button>
              </div>
              <!--//app-card-body-->
            </div>
            <!--//inner-->
          </div>
          <!--//app-card-->

          <div class="row g-4 mb-4">
            <div class="col-6 col-lg-3">
              <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                  <h4 class="stats-type mb-1">Solicitações dos formadores</h4>
                  <div class="stats-figure">12,628</div>
                  <div class="stats-meta text-success">
                    <svg
                      width="1em"
                      height="1em"
                      viewBox="0 0 16 16"
                      class="bi bi-arrow-up"
                      fill="currentColor"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"
                      />
                    </svg>
                    20%
                  </div>
                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
              </div>
              <!--//app-card-->
            </div>
            <!--//col-->

            <div class="col-6 col-lg-3">
              <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                  <h4 class="stats-type mb-1">Alunos</h4>
                  <div class="stats-figure">2.250</div>
                  <div class="stats-meta text-success">
                    <svg
                      width="1em"
                      height="1em"
                      viewBox="0 0 16 16"
                      class="bi bi-arrow-down"
                      fill="currentColor"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"
                      />
                    </svg>
                    5%
                  </div>
                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
              </div>
              <!--//app-card-->
            </div>
            
            <!--//col-->
            <div class="col-6 col-lg-3">
              <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                  <h4 class="stats-type mb-1">Formadores</h4>
                  <div class="stats-figure">23</div>
                  <div class="stats-meta">Open</div>
                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
              </div>
              <!--//app-card-->
            </div>
            <!--//col-->
            <div class="col-6 col-lg-3">
              <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                  <h4 class="stats-type mb-1">Cursos</h4>
                  <div class="stats-figure">6</div>
                  <div class="stats-meta">New</div>
                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
              </div>
              <!--//app-card-->
            </div>
            <!--//col-->
          </div>
          <!--//row-->
        </div>
        <!--//container-fluid-->
      </div>
      
    </div>
    <!--//app-wrapper-->
    <!-- Modal -->
<div class="modal fade" id="bg_modal" tabindex="-1" role="dialog" aria-labelledby="bg_modal" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header " >
         <h4 style="margin-left: auto; margin-right: auto;"  class="modal-title " id="myModalLabel">Aviso!</h4>
      </div>
      <div class="modal-body">
       A sua conta encontra-se inativa, por favor aguarde até a sua aprovação!
      </div>
    
    </div>

  </div>
</div>

<script src=" {{asset('new_site/js/jquery.js')}}"></script>
<script>
  $(document).ready(function() {
    //alert("pagina totalmente carregada")
    $('#bd_modal').modal('show');
  });
</script>
@endsection

