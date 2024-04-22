@extends('layout.site.index')
@section('title', ' Aquisições')
@section('content')
<div class="app-wrapper">


<section id="jpg" class="hero section">
<img src="{{asset('site/assets/img/Imagem WhatsApp 2024-04-22 às 03.48.56_aecbea99.jpg')}}" alt="" data-aos="fade-in">
<div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Lista de Aquisições</h1>
          </div>
        </div>
</div>
</section><!-- /Hero Section -->

<br>
			<div class="tab-content" id="orders-table-tab-content">
				<!-- Listas de todos os formadores -->
				<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					<div class="app-card app-card-orders-table shadow-sm mb-5">
						<div class="app-card-body">
							<div class="table-responsive">
								<table class="table app-table-hover mb-5 text-left">
									<thead>
										<tr>
											<th class="cell">Nome do Candidato</th>
											<th class="cell">Telefone</th>
											<th class="cell">Email</th>
											<th class="cell">Data do Registro</th>
											<th class="cell">Estado</th>
										</tr>
									</thead>

                                    <tbody>
                                        @foreach($professores as $prof)
                                            <tr>
                                                <td>{{$prof->user_name}}</td>
                                                <td>{{$prof->N_telemovel}}</td>
                                                <td>{{$prof->email}}</td>
                                                <td>{{$prof->created_at}}</td>
                                                <td>{{$prof->estado}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>

								</table>
							</div><!--//table-responsive-->

						</div><!--//app-card-body-->
					</div><!--//app-card-->


				</div><!--//tab-pane-->


		</div><!--//container-fluid-->
	</div><!--//app-content-->


</div><!--//app-wrapper-->
@endsection
