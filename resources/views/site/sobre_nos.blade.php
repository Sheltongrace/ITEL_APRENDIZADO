@extends('layout.site.index')
@section('title', 'Sobre nos')
@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1 class="">Sobre Nós<br></h1>
                        <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- End Page Title -->

    <!-- About Us Section -->
    <section id="about-us" class="section about-us">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{asset('site/assets/img/IMG-20240418-WA0014.jpg')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <h3>Missão</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                        </ul>
                    </div>



                    <!-- Vision -->
                    <div>
                        <h3>Visão</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                        </ul>
                    </div>
                </div>


            </div>

        </div>

    </section><!-- /About Us Section -->

    <!-- Stats About Section -->
    <section id="stats-about" class="stats-about section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class=" col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter"></span>
                        <p class="">Professores</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class=" col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
                        <p class="">Disciplinas</p>
                    </div>
                </div><!-- End Stats Item -->


            </div>

        </div>
    </section><!-- /Stats About Section -->

    <!-- Seção de testemunhas ou alunos que fizeram cursos -->


</main>
@endsection
