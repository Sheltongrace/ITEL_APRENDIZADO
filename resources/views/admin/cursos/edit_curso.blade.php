@extends('layout.admin.index')
@section('title', 'Editar Disciplinas')
@section('content')


<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <h2 class="app-page-title">Curso Editação</h2>
            <div class="row bg-white" id="regForm">

                <div class="col-lg-10">
                    <form action="{{route('cursosAdmin.store')}}" method="post">
                        @csrf
                        <div class="tab">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="email mb-3">
                                        <label class="form-label my-2 fw-semibold" for="signup-email">Nome do Curso</label>
                                        <input id="signup-name" name="nome_curso" type="text" class="form-control signup-name" placeholder="Nome do Curso" required="required" />
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
        </section>

        @endsection
