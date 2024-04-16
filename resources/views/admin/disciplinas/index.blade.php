@extends('layout.admin.index')
@section('title', 'Disciplinas')
@section('content')
<div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Disciplinas</h1>
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
								    
								    <select class="form-select w-auto" >
										  <option selected value="option-1">Todos</option>
										  <option value="option-2">Semana</option>
										  <option value="option-3">Mês</option>
										  <option value="option-4">Últimos 3 meses</option>
										  
									</select>
							    </div>
						    </div><!--//row-->
					    </div><!--//table-utilities-->
				    </div><!--//col-auto-->
			    </div><!--//row-->
			   
			    
			    
				
				
				<div class="tab-content" id="orders-table-tab-content">
                    <!-- Listas de todos os formadores -->
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">Nome</th>
												<th class="cell">Descricao</th>
												<th class="cell">Curso</th>
												<th class="cell">Preço</th>
												<th class="cell"></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												
												<td class="cell">John Sanders</td>
												<td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat erat</span></td>
												<td class="cell">John Sanders</td>
												<td class="cell">$259.35</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">Ver</a></td>
											</tr>
											<tr>
												
												<td class="cell">John Sanders</td>
												<td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat erat</span></td>
												<td class="cell">John Sanders</td>
												<td class="cell">$259.35</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">Ver</a></td>
											</tr>
											<tr>
												
												<td class="cell">John Sanders</td>
												<td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat erat</span></td>
												<td class="cell">John Sanders</td>
												<td class="cell">$259.35</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">Ver</a></td>
											</tr>
											
											<tr>
												
												<td class="cell">John Sanders</td>
												<td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat erat</span></td>
												<td class="cell">John Sanders</td>
												<td class="cell">$259.35</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">Ver</a></td>
											</tr>
											
											<tr>
												
												<td class="cell">John Sanders</td>
												<td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat erat</span></td>
												<td class="cell">John Sanders</td>
												<td class="cell">$259.35</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">Ver</a></td>
											</tr>
											
											<tr>
												
												<td class="cell">John Sanders</td>
												<td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat erat</span></td>
												<td class="cell">John Sanders</td>
												<td class="cell">$259.35</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">Ver</a></td>
											</tr>
		
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						       
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
						<nav class="app-pagination">
							<ul class="pagination justify-content-center">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
							    </li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
								    <a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</nav><!--//app-pagination-->
						
			        </div><!--//tab-pane-->
			        
                    <!-- Formadores Aprovados -->
			        <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
					    <div class="app-card app-card-orders-table mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
								    
							        <table class="table mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">Nome</th>
												<th class="cell">Email</th>
												<th class="cell">Assunto</th>
												<th class="cell">Mensagem</th>
												<th class="cell"></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												
												<td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat erat</span></td>
												<td class="cell">John Sanders</td>
												<td class="cell"><span>17 Oct</span><span class="note">2:16 PM</span></td>
												<td class="cell">$259.35</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="{{ route('formador.show', 1) }}">Ver</a></td>
											</tr>
											
											<tr>
												
												<td class="cell"><span class="truncate">Pellentesque diam imperdiet</span></td>
												<td class="cell">Teresa Holland</td>
												<td class="cell"><span class="cell-data">16 Oct</span><span class="note">01:16 AM</span></td>
												<td class="cell">$123.00</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="{{ route('formador.show', 1) }}">Ver</a></td>
											</tr>
											
											<tr>
												
												<td class="cell"><span class="truncate">Vestibulum a accumsan lectus sed mollis ipsum</span></td>
												<td class="cell">Jayden Massey</td>
												<td class="cell"><span class="cell-data">15 Oct</span><span class="note">8:07 PM</span></td>
												<td class="cell">$199.00</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="{{ route('formador.show', 1) }}">Ver</a></td>
											</tr>
										
											
											<tr>
												
												<td class="cell"><span class="truncate">Morbi vulputate lacinia neque et sollicitudin</span></td>
												<td class="cell">Raymond Atkins</td>
												<td class="cell"><span class="cell-data">11 Oct</span><span class="note">11:18 AM</span></td>
												<td class="cell">$678.26</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="{{ route('formador.show', 1) }}">Ver</a></td>
											</tr>
		
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
												<th class="cell">Nome</th>
												<th class="cell">Email</th>
												<th class="cell">Assunto</th>
												<th class="cell">Mensagem</th>
												<th class="cell"></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												
												<td class="cell"><span class="truncate">Consectetur adipiscing elit</span></td>
												<td class="cell">Dylan Ambrose</td>
												<td class="cell"><span class="cell-data">16 Oct</span><span class="note">03:16 AM</span></td>
												<td class="cell">$96.20</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="{{ route('formador.show', 1) }}">Ver</a></td>
											</tr>
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
												<th class="cell">Nome</th>
												<th class="cell">Email</th>
												<th class="cell">Assunto</th>
												<th class="cell">Mensagem</th>
												<th class="cell"></th>
											</tr>
										</thead>
										<tbody>
											
											<tr>
												
												<td class="cell"><span class="truncate">Justo feugiat neque</span></td>
												<td class="cell">Reina Brooks</td>
												<td class="cell"><span class="cell-data">12 Oct</span><span class="note">04:23 PM</span></td>
												<td class="cell">$59.00</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="{{ route('formador.show', 1) }}">Ver</a></td>
											</tr>
											
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
