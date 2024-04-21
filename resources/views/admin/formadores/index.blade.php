@extends('layout.admin.index')
@section('title', 'Formadores')
@section('content')
<div class="app-wrapper">

	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">

			<div class="row g-3 mb-4 align-items-center justify-content-between">
				<div class="col-auto">
					<h1 class="app-page-title mb-0">Listagem dos formadores</h1>
				</div>
				<div class="col-auto">
					<div class="page-utilities">
						<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							<div class="col-auto">
								<form class="table-search-form row gx-1 align-items-center">
									<div class="col-auto">
										<input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Procurar">
									</div>
									<div class="col-auto">
										<button type="submit" class="btn app-btn-secondary">Pesquisar</button>
									</div>
								</form>

							</div><!--//col-->
							<div class="col-auto">

								<select class="form-select w-auto">
									<option selected value="option-1">All</option>
									<option value="option-2">Semana</option>
									<option value="option-3">Mês</option>
									<option value="option-4">Last 3 months</option>

								</select>
							</div>
						</div><!--//row-->
					</div><!--//table-utilities-->
				</div><!--//col-auto-->
			</div><!--//row-->


			<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
				<a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Todos</a>
				<a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Aprovados</a>
				<a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Pendentes</a>
				<a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Cancelledos</a>
			</nav>


			<div class="tab-content" id="orders-table-tab-content">
				<!-- Listas de todos os formadores -->
				<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					<div class="app-card app-card-orders-table shadow-sm mb-5">
						<div class="app-card-body">
							<div class="table-responsive">
								<table class="table app-table-hover mb-0 text-left">
									<thead>
										<tr>
											<th class="cell">imgagem</th>
											<th class="cell">Nome</th>
											<th class="cell">Descrição</th>
											<th class="cell">Email</th>
											<th class="cell">Data de Registro</th>
											<th class="cell">Estado</th>
											<th class="cell"></th>
										</tr>
									</thead>
									<tbody>
										@foreach($professores as $prof)
										<tr>
											<td class="cell">
												<img src="{{asset('imagemFormador')}}/{{$prof->imagem}}" alt="">
											</td>
											<td class="cell"><span class="truncate">{{$prof->user_name}}</span></td>
											<td class="cell">{{$prof->descricao}}</td>
											<td class="cell">{{$prof->email}}</td>
											<td class="cell"><span>{{$prof->created_at}}</span></td>
											@if($prof->estado==="pendente")
											<td class="cell"><span class="badge bg-danger">{{$prof->estado}}</span></td>
											@elseif($prof->estado==="aprovado")
											<td class="cell"><span class="badge bg-success">{{$prof->estado}}</span></td>
											@else
											<td class="cell"><span class="badge bg-danger">{{$prof->estado}}</span></td>
											@endif
											<td class="cell"><a class="btn-sm app-btn-secondary" href="{{ route('formador.show',$prof->id_formador) }}">Ver</a></td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div><!--//table-responsive-->

						</div><!--//app-card-body-->
					</div><!--//app-card-->
					

				</div><!--//tab-pane-->

				<!-- Formadores Aprovados -->
				<div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
					<div class="app-card app-card-orders-table mb-5">
						<div class="app-card-body">
							<div class="table-responsive">

								<table class="table mb-0 text-left">
									<thead>
										<tr>
											<th class="cell">Imgagem</th>
											<th class="cell">Nome</th>
											<th class="cell">Descrição</th>
											<th class="cell">Email</th>
											<th class="cell">Data de Registro</th>
											<th class="cell">Estado</th>
											<th class="cell"></th>
										</tr>
									</thead>
									<tbody>
										@foreach($professores as $prof)
										@if($prof->estado==="aprovado")
										<tr>
											<td class="cell">
												<img src="{{asset('imagemFormador')}}/{{$prof->imagem}}" alt="">
											</td>
											<td class="cell"><span class="truncate">{{$prof->user_name}}</span></td>
											<td class="cell">{{$prof->descricao}}</td>
											<td class="cell">{{$prof->email}}</td>
											<td class="cell"><span>{{$prof->created_at}}</span></td>
											<td class="cell"><span class="badge bg-success">{{$prof->estado}}</span></td>
										</tr>
										@endif
										@endforeach

									</tbody>
								</table>
							</div><!--//table-responsive-->
						</div><!--//app-card-body-->
					</div><!--//app-card-->
				</div><!--//tab-pane-->

				<!-- Formadores Pendentes -->
				<div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
					<div class="app-card app-card-orders-table mb-5">
						<div class="app-card-body">
							<div class="table-responsive">
								<table class="table mb-0 text-left">
									<thead>
										<tr>
											<th class="cell">Imgagem</th>
											<th class="cell">Nome</th>
											<th class="cell">Descrição</th>
											<th class="cell">Email</th>
											<th class="cell">Data de Registro</th>
											<th class="cell">Estado</th>
											<th class="cell"></th>
										</tr>
									</thead>
									<tbody>
										@foreach($professores as $prof)
										@if($prof->estado==="pendente")
										<tr>
											<td class="cell">
												<img src="{{asset('imagemFormador')}}/{{$prof->imagem}}" alt="">
											</td>
											<td class="cell"><span class="truncate">{{$prof->user_name}}</span></td>
											<td class="cell">{{$prof->descricao}}</td>
											<td class="cell">{{$prof->email}}</td>
											<td class="cell"><span>{{$prof->created_at}}</span></td>
											<td class="cell"><span class="badge bg-success">{{$prof->estado}}</span></td>
										</tr>
										@endif
										@endforeach

									</tbody>
								</table>
							</div><!--//table-responsive-->
						</div><!--//app-card-body-->
					</div><!--//app-card-->
				</div><!--//tab-pane-->

				<!-- Cancelados -->
				<div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
					<div class="app-card app-card-orders-table mb-5">
						<div class="app-card-body">
							<div class="table-responsive">
								<table class="table mb-0 text-left">
									<thead>
										<tr>
											<th class="cell">Imgagem</th>
											<th class="cell">Nome</th>
											<th class="cell">Descrição</th>
											<th class="cell">Email</th>
											<th class="cell">Data de Registro</th>
											<th class="cell">Estado</th>
											<th class="cell"></th>
										</tr>
									</thead>
									<tbody>
										@foreach($professores as $prof)
										@if($prof->estado==="cancelado")
										<tr>
											<td class="cell">
												<img src="{{asset('imagemFormador')}}/{{$prof->imagem}}" alt="">
											</td>
											<td class="cell"><span class="truncate">{{$prof->user_name}}</span></td>
											<td class="cell">{{$prof->descricao}}</td>
											<td class="cell">{{$prof->email}}</td>
											<td class="cell"><span>{{$prof->created_at}}</span></td>
											<td class="cell"><span class="badge bg-dander">{{$prof->estado}}</span></td>
										</tr>
										@endif
										@endforeach

									</tbody>
								</table>
							</div><!--//table-responsive-->
						</div><!--//app-card-body-->
					</div><!--//app-card-->
				</div><!--//tab-pane-->
			</div><!--//tab-content-->



		</div><!--//container-fluid-->
	</div><!--//app-content-->


</div><!--//app-wrapper-->
@endsection