@extends('layout.site.index')
@section('title', ' Minha marcações')
@section('content')
<div class="app-wrapper">

	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">

			<div class="row g-3 mb-4 align-items-center justify-content-between">
				<div class="col-auto">
					<h1 class="app-page-title mb-0">Minha marcação</h1>
				</div>
				<div class="col-auto">
					<div class="page-utilities">
						<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
						</div><!--//row-->

						<div class="container">
          <button type="button" class="btn btn-dark"><a href="{{ route('site') }}" class="active">Voltar</a></button>
          </div>
    
					</div><!--//table-utilities-->
				</div><!--//col-auto-->
			</div><!--//row-->


			<div class="tab-content" id="orders-table-tab-content">
				<!-- Listas de todos os formadores -->
				<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					<div class="app-card app-card-orders-table shadow-sm mb-5">
						<div class="app-card-body" style="background-color: cyan;">
							<div class="table-responsive">
								<table class="table app-table-hover mb-5 text-left">
									<thead>
										<tr>
											<th class="cell">Nome do Aluno</th>
											<th class="cell">Telefone</th>
											<th class="cell">Email</th>
											<th class="cell">Data do Registro</th>
											<th class="cell">Estado</th>
										</tr>
									</thead>
									
								</table>
							</div><!--//table-responsive-->

						</div><!--//app-card-body-->
					</div><!--//app-card-->
					

				</div><!--//tab-pane-->


		</div><!--//container-fluid-->
	</div><!--//app-content-->


</div><!--//app-wrapper-->
@endsection