@extends('layout.auth.index')
@section('title', 'Entrar')
@section('content')
<div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"> <h1>QuinGrace</h1> </a></div>
					<h2 class="auth-heading text-center mb-5">Entrar</h2>
			        <div class="auth-form-container text-start">
						<form class="auth-form login-form" action = "{{ route('auth.login') }}" method = "post">         
							@csrf
                            <div class="email mb-3">
								<label class="form-label ps-2 mb-2 fw-semibold" for="signin-email">Email</label>
								<input id="signin-email" name="signin-email" type="email" class="form-control signin-email" placeholder="email@exemplo.com" required="required">
							</div><!--//form-group-->
							<div class="password mb-3">
								<label class="form-label ps-2 mb-2 fw-semibold" for="signin-password">Senha</label>
								<input id="signin-password" name="signin-password" type="Senha" class="form-control signin-password" placeholder="xxxxxxxxxxxxxxxxx" required="required">
								<div class="extra mt-3 row justify-content-between">
									<div class="col-12">
										<div class="forgot-password text-end">
											<a href="reset-password.html">Lembrar Senha</a>
										</div>
									</div><!--//col-6-->
								</div><!--//extra-->
							</div><!--//form-group-->
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Acessar </button>
							</div>
						</form>
						
						<div class="auth-option text-center pt-5"><a class="text-link text-decoration-underline" href="signUpTeacher.html" >Criar Conta</a>.</div>
					</div><!--//auth-form-container-->	

			    </div><!--//auth-body-->
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>
				    <div class="overlay-content p-3 p-lg-4 rounded">
					    <h5 class="mb-3 overlay-title fs-3">Aprendendo Hoje,
							Liderando Amanhã</h5>
							<p class="fs-4">Faça Parte da Revolução Educacional:
								Aprenda com os Melhores e Seja um Líder em sua Área</p></div>
				    </div>
				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->
    
    </div><!--//row-->
@endsection