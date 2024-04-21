@extends('layout.site.index')
@section('title', 'Alunos')
@section('content')

<main class="main">
    <!-- Page Title -->
    <div id="hero" class="page-title hero section" data-aos="fade">
        <img src="{{asset('site/assets/img/hero-bg.jpg')}}" alt="" data-aos="fade-in">

        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Alunos</h1>
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




    <!-- /Trainers Section -->

    <!-- Section register of curses -->
    <section id="trainerCourse">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <!-- Section Title -->
                    <div class="container section-title" data-aos="fade-up">
                        <h2>registo para o garimpo</h2>
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
                                        <label class="form-label my-2 fw-semibold" for="signup-email">Disciplina</label>
                                        <select id="signup-tel" name="id_disciplina" class="form-control signup-email">
                                            @foreach($todasDisciplinas as $disciplina)
                                            <option value="{{$disciplina->id_disciplina}}">{{$disciplina->nome_disciplina}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <input type="text" name="id_aluno" value="1" style="display: none;">

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="email mb-3">
                                        <label class="form-label my-2 fw-semibold" for="signup-email">Quanto tempo</label>
                                        <select id="signup-tel" name="QuantoTempo" class="form-control signup-email">
                                            <option value="">Define um tempo</option>
                                            <option value="Entre 24 à 72 Hora">Entre 24 à 72 Hora</option>
                                            <option value="1 Semana">1 Semana</option>
                                            <option value="2 semanas">2 semanas</option>
                                            <option value="3 semanas">3 semanas</option>
                                            <option value="1 Mês">1 Mês</option>
                                            <option value="Tempo indefinido"> Tempo indefinido</option>
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
                        <!-- step 3 -->

                        <div class="tab">
                            <div class="row flex-row-reverse">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="email mb-3">
                                        <label class="form-label my-1 fw-semibold" for="signup-email">Periódo</label>
                                        <select id="signup-tel" name="periodo" class="form-control signup-email">
                                            <option value="">Escolha um peródo</option>
                                            <option value="manha">Manhã</option>
                                            <option value="tarde">Tarde</option>
                                            <option value="noite">Noite</option>
                                        </select>
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
