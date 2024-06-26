@extends('layout.admin.index')
@section('title', 'Editar disciplinas')
@section('content')

<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <h2 class="app-page-title">Editar Disciplinas</h2>
            <div class="row bg-white" id="regForm">
                <div class="col-lg-10">

                    <!-- step 1 -->

                    <form action="{{route('admin.disciplina.update',['id'=>$disciplina->id_disciplina])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="tab">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="email mb-3">
                                        <label class="form-label my-2 fw-semibold" for="signup-email">Nome da Disciplina</label>
                                        <input id="signup-name" name="nome_disciplina" type="text" class="form-control signup-name" placeholder="Nome da Disciplina" required="required"  value="{{$disciplina->nome_disciplina}}"/>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="email mb-3">
                                        <label class="form-label my-2 fw-semibold" for="signup-email">Preço da Disciplina</label>
                                        <input id="signup-name" name="preco" type="number" class="form-control signup-name" placeholder="Preço" required="required"   value="{{$disciplina->preco}}"/>
                                    </div>
                                </div>

                                <div>
                                    <button type="submit" class="btn-primary btn nextBtn fw-bold">
                                    Editar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
        @endsection
