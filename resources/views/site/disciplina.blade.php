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
            <nav class="breadcrumbs">
              <div class="container">
                <ol>
                  <li><a href="index.html">Início</a></li>
                  <li class="current">Disciplinas</li>
                </ol>
              </div>
            </nav>
          </div>
          
        </div>
        
      </div>
      <!-- End Page Title -->

    <!-- Courses List Section -->
    <section id="courses-list" class="section courses-list">
      <div class="container">
        <div class="row g-5">

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
        </div>
      </div>

    </section><!-- /Courses List Section -->

  </main>
  @endsection
