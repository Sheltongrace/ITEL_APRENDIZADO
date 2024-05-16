@extends('layout.admin.index')
@section('title', 'Agendar Aulas')
@section('content')

<main class="main">
<section>
    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h2 class="app-page-title">Agendar Aulas</h2>
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
                                        <label class="form-label my-2 fw-semibold" for="signup-email" >Disciplina</label>
                                        <select id="signup-tel" name="id_disciplina" class="form-control signup-email" >
                                        <option value="">Escolha uma disciplina</option>
                                            @foreach($todasDisciplinas as $disciplina)
                                            <option value="{{$disciplina->id_disciplina}}">{{$disciplina->nome_disciplina}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

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

                                <div  class="col-md-6">
                                        <div style="text-align: center;" class="password mb-3">
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
@endsection
















    















                          















