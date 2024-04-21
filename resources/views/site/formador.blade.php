@extends('layout.site.index')
@section('title', 'Formadores')
@section('content')

<main class="main">
  <!-- Page Title -->
  <div id="hero" class="page-title hero section" data-aos="fade">
    <img src="{{asset('site/assets/img/IMG-20240418-WA0010.jpg')}}" alt="" data-aos="fade-in">

    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Formadores</h1>
            <p class="mb-0">
              Odio et unde deleniti. Deserunt numquam exercitationem.
              Officiis quo odio sint voluptas consequatur ut a odio
              voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi
              ratione sint. Sit quaerat ipsum dolorem.
            </p>
          </div>
        </div>
  
        
    
      </div>

    </div>

  </div>
  <!-- End Page Title -->

  <!-- Trainers Section -->
  <section id="trainers" class="section trainers">
    <div class="container">
      <div class="row gy-5">
        @foreach($professores as $prof)
          @if($prof->estado==="aprovado")
              <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="{{asset('imagemFormador')}}/{{$prof->imagem}}" class="img-fluid" alt="" />
                  <div class="social">
                    {{--<a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                          --}}
                  </div>
                </div>
                <div class="member-info text-center">
                  <h4>{{ $prof->user_name}}</h4>
                  <span class="">{{$prof->nivel_acesso}}</span>
                  <p>
                    {{$prof->disciplina}}
                  </p>
                </div>
              </div>
          @endif
        @endforeach


        <!-- End Team Member -->
      </div>
    </div>
  </section>
  <!-- /Trainers Section -->

  <!-- Section register of curses -->
  <section id="trainerCourse">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Torne-se um formador</h2>
            <p class="">Inscreva-se já</p>
          </div>
          <!-- End Section Title -->
        </div>
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
                      <label class="form-label fw-semibold" for="signup-password">Disciplina</label>
                      <input id="signup-password" name="disciplina" type="text" class="form-control signup-password" placeholder="Diciplina" required="required">
                    </div>
                  </div>

                  <div class="col-sm-12 col-md-12">
                    <label for="" class="label-form my-2">Porquê quer ser formador ?</label>
                    <textarea name="descricao" id="" cols="30" rows="10" class="form-control" placeholder="Descreva o porquê quer ser formador ?"></textarea>
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
  </section>
</main>
@endsection