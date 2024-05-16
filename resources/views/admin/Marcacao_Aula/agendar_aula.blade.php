@extends('layout.site.index')
@section('title', 'Alunos')
@section('content')

<main class="main">
    <!-- Page Title -->
    <div id="hero" class="page-title hero section" data-aos="fade">
        <img src="{{asset('site/assets/img/IMG-20240418-WA0020.jpg')}}" alt="" data-aos="fade-in">

        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Alunos</h1>
                        <p class="mb-0">
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- End Page Title -->

    <!-- Trainers Section -->




    <!-- /Trainers Section -->

    <!-- Section register of curses -->
    <section id="trainerCourse">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <!-- Section Title -->
                    <div class="container section-title" data-aos="fade-up">
                        <h2>Agendar de Aula</h2>
                        <p class="">Marcar Aula</p>
                    </div>
                    <!-- End Section Title -->
                </div>

                <div class="col-lg-10">
                    <form method="post" action="{{route('marcacaoAula.save')}}">
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
                                            <label class="form-label my-2 fw-semibold" for="signup-email" >Nível académico</label>
                                            <input id="signup-email" name="nivel_academico" type="text" class="form-control signup-email valid" placeholder="Nível académico" required="required">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="email mb-3">
                                        <label class="form-label my-2 fw-semibold" for="signup-email" >Disciplina</label>
                                        <select id="signup-tel" name="id_disciplina" class="form-control signup-email" >
                                        <option value="">Escolha uma disciplina</option>
                                            @foreach($todasDisciplinas as $disciplina)
                                            <option value="{{$disciplina->id_disciplina}}">{{$disciplina->nome_disciplina}}</option>
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
                                        <label class="form-label my-1 fw-semibold" for="signup-email">Periódo</label>
                                        <select id="signup-tel" name="periodo" class="form-control signup-email">
                                            <option value="">Define um peródo</option>
                                            <option value="manha">Matinal</option>
                                            <option value="tarde">Diúrno</option>
                                            <option value="noite">Noturno</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="email mb-3">
                                        <label class="form-label my-1 fw-semibold" for="signup-email">Hora</label>
                                        <select id="signup-tel" name="Hora" class="form-control signup-email" >
                                            <option value="">Hora</option>
                                            <option value="manha">Escolhe uma</option>
                                            <option value="tarde">##:##</option>
                                            <option value="noite">##:##</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="email mb-3">
                                            <label class="form-label my-2 fw-semibold" for="signup-email">Telemóvel</label>
                                            <input id="signup-email" name="Telemóvel" type="number" class="form-control signup-email valid" placeholder="+244 xxx xxx xxx" required="required">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="email mb-3">
                                            <label class="form-label my-2 fw-semibold" for="signup-email">E-mail</label>
                                            <input id="signup-email" name="E-mail" type="text" class="form-control signup-email valid" placeholder="nome@gmail.com" required="required">
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
                                        <label class="form-label my-2 fw-semibold" for="signup-email">Quanto tempo</label>
                                        <select id="signup-tel" name="QuantoTempo" class="form-control signup-email">
                                            <option value="">Estabeleça um tempo</option>
                                            <option value="Entre 24 à 72 Hora" required="required">Entre 24 à 72 Hora</option>
                                            <option value="1 Semana">1 Semana</option>
                                            <option value="2 semanas">2 semanas</option>
                                            <option value="3 semanas">3 semanas</option>
                                            <option value="1 Mês">1 Mês</option>
                                        </select>
                                   </div>                            
                                 </div>

                                    <div class="col-md-6">
                                        <div class="password mb-3">
                                            <label class="form-label fw-semibold" for="signup-password">Localização</label>
                                            <input id="signup-password" name="disciplina" type="text" class="form-control signup-password" placeholder="Morada" required="required">
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
    </section>
</main>
@endsection
















    















                          















