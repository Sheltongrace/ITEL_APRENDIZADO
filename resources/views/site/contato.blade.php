@extends('layout.site.index')
@section('title', 'Contato')
@section('content')
<main class="main">

    <!-- Page Title -->
    <div id="hero" class="page-title hero section" data-aos="fade">
      <img src="{{asset('site/assets/img/IMG-20240418-WA0006.jpg')}}" alt="" data-aos="fade-in">
 
      <div class="heading">
          <div class="container">
            <div class="row d-flex justify-content-center text-center">
              <div class="col-lg-8">
                <h1>Contacto</h1>
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

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Localização</h3>
                <p>KM CTT, Rangel, Luanda</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Contacte - nos</h3>
                <p>9xx xxx xxx</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>greengrace@example.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="#" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6 fw-semibold">
                  <label for="name">Nome</label>
                  <input type="text" name="name" id="name" class="form-control mt-2" placeholder="Coloque o seu nome" required="">
                </div>

                <div class="col-md-6 fw-semibold">
                  <label for="email">Email</label>
                  <input type="email" class="form-control mt-2" id="email" name="email" placeholder="Coloque o seu email" required="">
                </div>

                <div class="col-md-12 fw-semibold">
                  <label for="subject">Assunto</label>
                  <input type="text" class="form-control mt-2" id="subject" name="subject" placeholder="Coloque o assunto" required="">
                </div>

                <div class="col-md-12 fw-semibold">
                  <label for="message">Mensagem</label>
                  <textarea class="form-control mt-2" name="message" id="message" rows="6" placeholder="Mensagem" required=""></textarea>
                </div>

                <div class="col-md-12 ">
                  <div class="loading">Processando...</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Sua mensagem foi enviada. Onrogado!</div>
                  <button type="submit">Enviar</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>
@endsection