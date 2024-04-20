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
            <div class="container">
          <button type="button" class="btn btn-dark"><a href="{{ route('site') }}" class="active">Home</a></button>
          </div>
    
          </div>
          
        </div>
        
      </div>
      <!-- End Page Title -->

      <!-- Trainers Section -->
      <section id="trainers" class="section trainers">
        <div class="container">
          <div class="row gy-5">
            <div
              class="col-lg-4 col-md-6 member"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="member-img">
                <img
                  src="{{asset('site/assets/img/team/team-1.jpg')}}"
                  class="img-fluid"
                  alt=""
                />
                <div class="social">
                  {{--<a href="#"><i class="bi bi-twitter"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                --}}</div>
              </div>
              <div class="member-info text-center">
                <h4>Walter White</h4>
                <span class="">Business</span>
                <p>
                  Aliquam iure quaerat voluptatem praesentium possimus unde
                  laudantium vel dolorum distinctio dire flow
                </p>
              </div>
            </div>
            <!-- End Team Member -->

            <div
              class="col-lg-4 col-md-6 member"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="member-img">
                <img
                  src="{{asset('site/assets/img/team/team-2.jpg')}}"
                  class="img-fluid"
                  alt=""
                />
                <div class="social">
                  {{--<a href="#"><i class="bi bi-twitter"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                --}}</div>
              </div>
              <div class="member-info text-center">
                <h4>Sarah Jhonson</h4>
                <span class="">Marketing</span>
                <p>
                  Labore ipsam sit consequatur exercitationem rerum laboriosam
                  laudantium aut quod dolores exercitationem ut
                </p>
              </div>
            </div>
            <!-- End Team Member -->

            <div
              class="col-lg-4 col-md-6 member"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="member-img">
                <img
                  src="{{asset('site/assets/img/team/team-3.jpg')}}"
                  class="img-fluid"
                  alt=""
                />
                <div class="social">
                  {{--<a href="#"><i class="bi bi-twitter"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                --}}</div>
              </div>
              <div class="member-info text-center">
                <h4>William Anderson</h4>
                <span class="">Maths</span>
                <p>
                  Illum minima ea autem doloremque ipsum quidem quas aspernatur
                  modi ut praesentium vel tque sed facilis at qui
                </p>
              </div>
            </div>
            <!-- End Team Member -->

            <div
              class="col-lg-4 col-md-6 member"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div class="member-img">
                <img
                  src="{{asset('site/assets/img/team/team-4.jpg')}}"
                  class="img-fluid"
                  alt=""
                />
                <div class="social">
                  {{--<a href="#"><i class="bi bi-twitter"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                --}}</div>
              </div>
              <div class="member-info text-center">
                <h4>Amanda Jepson</h4>
                <span class="">Foreign Languages</span>
                <p>
                  Magni voluptatem accusamus assumenda cum nisi aut qui dolorem
                  voluptate sed et veniam quasi quam consectetur
                </p>
              </div>
            </div>
            <!-- End Team Member -->

            <div
              class="col-lg-4 col-md-6 member"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <div class="member-img">
                <img
                  src="{{asset('site/assets/img/team/team-5.jpg')}}"
                  class="img-fluid"
                  alt=""
                />
                <div class="social">
                  {{--<a href="#"><i class="bi bi-twitter"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                --}}</div>
              </div>
              <div class="member-info text-center">
                <h4>Brian Doe</h4>
                <span class="">Web Development<br /></span>
                <p>
                  Qui consequuntur quos accusamus magnam quo est molestiae eius
                  laboriosam sunt doloribus quia impedit laborum velit
                </p>
              </div>
            </div>
            <!-- End Team Member -->

            <div
              class="col-lg-4 col-md-6 member"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <div class="member-img">
                <img
                  src="{{asset('site/assets/img/team/team-6.jpg')}}"
                  class="img-fluid"
                  alt=""
                />
                <div class="social">
                  {{--<a href="#"><i class="bi bi-twitter"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                --}}</div>
              </div>
              <div class="member-info text-center">
                <h4>Josepha Palas</h4>
                <span class="">Business</span>
                <p>
                  Sint sint eveniet explicabo amet consequatur nesciunt error
                  enim rerum earum et omnis fugit eligendi cupiditate vel
                </p>
              </div>
            </div>
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
                <h2>registo para o garimpo</h2>
                <p class="">Inscreva-se já</p>
              </div>
              <!-- End Section Title -->
            </div>
            
            <div class="col-lg-10">
              <form>
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
                        <label
                          class="form-label my-2 fw-semibold"
                          for="signup-email"
                          >Primeiro nome</label
                        >
                        <input
                          id="signup-name"
                          name="signup-name"
                          type="text"
                          class="form-control signup-name"
                          placeholder="Primeiro nome"
                          required="required"
                        />
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="email mb-3">
                        <label
                          class="form-label my-2 fw-semibold"
                          for="signup-email"
                          >Último nome</label
                        >
                        <input
                          id="signup-email"
                          name="signup-email"
                          type="text"
                          class="form-control signup-email"
                          placeholder="Último nome"
                          required="required"
                        />
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="email mb-3">
                        <label
                          class="form-label my-2 fw-semibold"
                          for="signup-email"
                          >Classe</label
                        >
                        <input
                          id="signup-email"
                          name="signup-email"
                          type="text"
                          class="form-control signup-email valid"
                          placeholder="Classe"
                          required="required"
                        />
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="email mb-3">
                        <label
                          class="form-label my-2 fw-semibold"
                          for="signup-email"
                          >Curso</label  
                        >
                        <select
                          id="signup-tel"
                          name=""
                          class="form-control signup-email"
                        >
                        <option value="">Escolha um curso</option>
                          <option value="1">Eletronica</option>
                          <option value="2">Informática</option>
                          <option value="3">Multimedia</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="d-flex justify-content-between mt-3">
                    <div>
                      <button
                        type="button"
                        class="btn-primary btn nextBtn fw-bold"
                        onclick="nextPrev(1)"
                      >
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
                        <label
                          class="form-label my-2 fw-semibold"
                          for="signup-email"
                          >Telefone</label
                        >
                        <input
                          id="signup-tel"
                          name="signup-tel"
                          type="tel"
                          class="form-control signup-email"
                          placeholder="+244 xxxxxx"
                          required="required"
                          maxlength="9"
                        />
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="email mb-3">
                        <label
                          class="form-label my-2 fw-semibold"
                          for="signup-email"
                          >Morada</label
                        >
                        <input
                          id="signup-tel"
                          name="signup-idententy"
                          type="text"
                          class="form-control signup-email"
                          placeholder="Morada"
                          required="required"
                        />
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="email mb-3">
                        <label
                          class="form-label my-2 fw-semibold"
                          for="signup-email"
                          >BI</label
                        >
                        <input
                          id="signup-tel"
                          name="signup-idententy"
                          type="text"
                          class="form-control signup-email valid"
                          placeholder="BI ou Identificador Fiscal"
                          required="required"
                        />
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="email mb-3">
                        <label
                          class="form-label my-2 fw-semibold"
                          for="signup-email"
                          >Email</label
                        >
                        <input
                          id="signup-tel"
                          name="signup-idententy"
                          type="text"
                          class="form-control signup-email"
                          placeholder="email@exemplo.com"
                          required="required"
                        />
                      </div>
                    </div>
                  </div>

                  <div
                    class="d-flex justify-content-between align-items-center mt-3"
                  >
                    <div>
                      <button
                        type="button"
                        class="btn-primary btn prevBtn fw-bold"
                        onclick="nextPrev(-1)"
                      >
                        Voltar
                      </button>
                    </div>

                    <div>
                      <button
                        type="button"
                        class="btn-primary btn nextBtn fw-bold"
                        onclick="nextPrev(1)"
                      >
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
                        <label
                          class="form-label my-1 fw-semibold"
                          for="signup-email"
                          >Carga horária</label
                        >
                        <select
                          id="signup-tel"
                          name=""
                          class="form-control signup-email"
                        >
                          <option value="manha">Manhã</option>
                          <option value="tarde">Tarde</option>
                          <option value="noite">Noite</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="email mb-3">
                        <label
                          class="form-label my-1 fw-semibold"
                          for="signup-email"
                          >Trimestre</label
                        >
                        <select
                          id="signup-tel"
                          name=""
                          class="form-control signup-email"
                        >
                          <option value="" disabled selected>
                            Quantos trimestre farás ?
                          </option>
                          <option value="manha">1</option>
                          <option value="tarde">2</option>
                          <option value="noite">3</option>
                          <option value="noite">4</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-12">
                      <label for="" class="label-form my-2">Assunto ?</label>
                      <textarea
                        name=""
                        id=""
                        cols="30"
                        rows="10"
                        class="form-control"
                        placeholder="Qual assunto a ser tratado?"
                      ></textarea>
                    </div>
                  </div>

                  <div
                    class="d-flex justify-content-between align-items-center mt-3"
                  >
                    <div>
                      <button
                        type="button"
                        class="btn-primary btn prevBtn fw-bold"
                        onclick="nextPrev(-1)"
                      >
                        Voltar
                      </button>
                    </div>

                    <div>
                      <button
                        type="button"
                        class="btn-primary btn nextBtn fw-bold"
                        onclick="nextPrev(1)"
                      >
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