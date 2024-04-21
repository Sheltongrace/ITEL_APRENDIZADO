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
  <section id="counts" class="section counts">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class=" col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="60" data-purecounter-duration="1" class="purecounter"></span>
            <p class="">Alunos</p>
          </div>
        </div><!-- End Stats Item -->

        <div class=" col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
            <p class="">Cursos</p>
          </div>
        </div><!-- End Stats Item -->


      </div>

    </div>

  </section><!-- /Counts Section -->
  

  <!-- Courses Section -->
  <section id="courses" class="courses section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Disciplinas</h2>
      <p class="">Cursos Populares</p>
    </div><!-- End Section Title -->

    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="course-item">
            <img src="{{asset('site/assets/img/course-1.jpg')}}" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <p class="category">Desenvolvimento Web</p>
                <p class="price">169 Kz</p>
              </div>

              <h3><a href="course-details.html">Website Design</a></h3>
              <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
              <div class="trainer d-flex justify-content-end align-items-center">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">
                  Ver mais
                </button>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="course-item">
            <img src="{{asset('site/assets/img/course-2.jpg')}}" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <p class="category">Marketing</p>
                <p class="price">250 Kz</p>
              </div>

              <h3><a href="course-details.html">Search Engine Optimization(SEO)</a></h3>
              <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
              <div class="trainer d-flex justify-content-end align-items-center">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal2">
                  Ver mais
                </button>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="course-item">
            <img src="{{asset('site/assets/img/course-3.jpg')}}" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <p class="category">Content</p>
                <p class="price">180 Kz</p>
              </div>

              <h3><a href="course-details.html">Informática na ótica do usuário</a></h3>
              <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
              <div class="trainer d-flex justify-content-end align-items-center">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal3">
                  Ver mais
                </button>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->

        <!-- First Modal for first Card-->
        <div class="modal fade" id="modal1"aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Lista disciplinas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <ul>
                  <li>HTML5</li>
                  <li>CSS3</li>
                  <li>JAVASCRIPT</li>
                  <li>ANGULAR</li>
                  <li>SASS</li>
                  <li>BOOTSTRAP</li>
                  <li>TAILWIND</li>
                </ul>
              </div>
              
            </div>
          </div>
        </div>
        <!-- End Modal -->

        <!-- Second Modal for second Card-->
        <div class="modal fade" id="modal2"aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Lista disciplinas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <ul>
                  <li>Venda Online</li>
                  <li>Mecanismo de busca</li>
                  <li>Marketing Digital</li>
                  <li>Marketing Dashboard</li>
                </ul>
              </div>
              
            </div>
          </div>
        </div>
        <!-- End Modal -->

        <!-- Third Modal for Third Card-->
        <div class="modal fade" id="modal3"aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Lista disciplinas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <ul>
                  <li>Word</li>
                  <li>Power Point</li>
                  <li>Excel Básico</li>
                  <li>Adobe Rider</li>
                  <li>Hardware</li>
                  <li>SoftWare</li>
                </ul>
              </div>
              
            </div>
          </div>
        </div>
        <!-- End Modal -->
      </div>
    </div>

  </section><!-- /Courses Section -->

  <!-- Testumunha Section -->
  <section id="testimonials" class="testimonials section">

    <
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- /Testemunhas Section -->

</main>
@endsection