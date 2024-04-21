@extends('layout.site.index')
@section('title', 'Disciplinas')
@section('content')

<main class="main">
    <!-- Page Title -->
    <div id="hero" class="page-title hero section" data-aos="fade">
      <img src="{{asset('site/assets/img/hero-bg.jpg')}}" alt="" data-aos="fade-in">
 
      <div class="heading">
          <div class="container">
            <div class="row d-flex justify-content-center text-center">
              <div class="col-lg-8">
                <h1>Disciplinas</h1>
                <p class="mb-0">
                  Odio et unde deleniti. Deserunt numquam exercitationem.
                  Officiis quo odio sint voluptas consequatur ut a odio
                  voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi
                  ratione sint. Sit quaerat ipsum dolorem.
                </p>
              </div>
            </div>
            <div class="container">
          <button type="button" class="btn btn-dark"><a href="{{ route('site') }}" class="active">Home</a></button>
          </div>
    
          </div>
          
        </div>    
        
      </div>
      <!-- End Page Title -->

    <!-- Courses List Section -->
    <section id="courses-list" class="section courses-list">
      <div class="container">
        <div class="row">
        <div class="col-lg-4 col-md-4 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="course-item">
              <img src="site/assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>

                <h3><a href="course-details.html">Matemática</a></h3>
                <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1-2.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                  <p class="category"><a href="{{ route('auth.login.aluno') }}">Agendar</a></p>
                  <p class="price">3.000kz</p>
                  </div>
              </div>
            </div>
          </div> <!-- End Course Item-->
          <div class="col-lg-4 col-md-4 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="course-item">
              <img src="site/assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>

                <h3><a href="course-details.html">Matemática</a></h3>
                <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1-2.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                  <p class="category"><a href="{{ route('auth.login.aluno') }}">Agendar</a></p>
                  <p class="price">3.000kz</p>
                  </div>
              </div>
            </div>
          </div> <!-- End Course Item-->
          <div class="col-lg-4 col-md-4 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="course-item">
              <img src="site/assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>

                <h3><a href="course-details.html">Matemática</a></h3>
                <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1-2.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                  <p class="category"><a href="{{ route('auth.login.aluno') }}">Agendar</a></p>
                  <p class="price">3.000kz</p>
                  </div>
              </div>
            </div>
          </div> <!-- End Course Item-->
          <div class="col-lg-4 col-md-4 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="course-item">
              <img src="site/assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>

                <h3><a href="course-details.html">Matemática</a></h3>
                <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1-2.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                  <p class="category"><a href="{{ route('auth.login.aluno') }}">Agendar</a></p>
                  <p class="price">3.000kz</p>
                  </div>
              </div>
            </div>
          </div> <!-- End Course Item-->
          <div class="col-lg-4 col-md-4 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="course-item">
              <img src="site/assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>

                <h3><a href="course-details.html">Matemática</a></h3>
                <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1-2.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                  <p class="category"><a href="{{ route('auth.login.aluno') }}">Agendar</a></p>
                  <p class="price">3.000kz</p>
                  </div>
              </div>
            </div>
          </div> <!-- End Course Item-->
          <div class="col-lg-4 col-md-4 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="course-item">
              <img src="site/assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>

                <h3><a href="course-details.html">Matemática</a></h3>
                <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1-2.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                  <p class="category"><a href="{{ route('auth.login.aluno') }}">Agendar</a></p>
                  <p class="price">3.000kz</p>
                  </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

         
      </div>

    </section><!-- /Courses List Section -->

  </main>
  @endsection
