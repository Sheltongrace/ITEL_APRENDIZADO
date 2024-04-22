@extends('layout.site.index')
@section('title', 'Home')
@section('content')
<main class="main">
    <!-- Hero Section -->
    <section id="jpg" class="hero section">

        <img src="{{asset('site/assets/img/IMG-20240418-WA0023.jpg')}}" alt="" data-aos="fade-in">

        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="100" class="">Aprendendo Hoje, <br> Liderando Amanhã</h2>
            <p data-aos="fade-up" data-aos-delay="200">Faça Parte da Revolução Educacional: <br> Aprenda com os Melhores e Seja um Líder em sua Área</p>
            <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                <a href="{{ route('auth.register') }}" class="btn-get-started">Inscrever-se</a>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" w="200">
                    <img src="{{asset('site/assets/img/IMG-20240418-WA0020.jpg')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>Sobre nós</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quaerat dolorem architecto ducimus nostrum dolorum optio modi libero quibusdam maiores, suscipit culpa dolor ut id neque deserunt velit voluptatem tempora.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                    </ul>
                    <a href="{{ route('site.sobre.nos') }}" class="read-more text-capitalize"><span>saber mais</span><i class="bi bi-arrow-right"></i></a>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Counts Section -->


    <section id="courses-list" class="section courses-list">
        <div class="container">
            <div class="row">
                @foreach($todasDisciplina as $disciplina)
                <div class="col-lg-4 col-md-4 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="course-item">
                        <img src="{{asset('imagemDisciplina')}}/{{$disciplina->imagem}}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                            </div>

                            <h3><a href="course-details.html">{{$disciplina->nome_disciplina}}</a></h3>
                            <p class="description">Aproveite o garimpo em quanto cedo</p>
                            <div class="trainer-profile d-flex align-items-center">
                                <img src="assets/img/trainers/trainer-1-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="category"><a href="{{ route('auth.login.aluno') }}" style="color: bisque;">Agendar</a></p>
                                <p class="price">{{$disciplina->preco}}kz</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->
                @endforeach

            </div>

    </section><!-- /Courses List Section -->

    <!-- Testumunha Section -->
    <section id="testimonials" class="testimonials section">

        < </div>
            <div class="swiper-pagination"></div>
            </div>

            </div>

    </section><!-- /Testemunhas Section -->

</main>
@endsection
