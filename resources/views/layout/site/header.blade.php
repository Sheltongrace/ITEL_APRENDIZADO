
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center" >

      <a href="" class="logo d-flex align-items-center me-auto">
        <h1 class="">GuinGrace</h1>
      </a>

      <nav id="navmenu" class="navmenu"> 
        <ul>
          <li><a href="{{ route('site') }}" class="active">Início</a></li>
          <li><a href="{{ route('site.sobre.nos') }}">Sobre nós</a></li>
          <li><a href="{{ route('site.disciplina') }}">Disciplinas</a></li>
          <li><a href="{{ route('auth.login.aluno') }}">Alunos</a></li>
          <li><a href="{{ route('minha.marcacao') }}">Marcações</a></li>         
          <li><a href="{{ route('site.formador') }}">Formadores</a></li>
          <li><a href="{{ route('site.contato') }}">Contacto</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      @auth
      @else
      <a class="btn-getstarted" href="{{ route('login') }}" target="_blank">Login</a>
      <a class="btn-getstarted"  href="{{ route('auth.register') }}" target="_blank">Inscrever-se</a>
      @endauth
    </div>
  </header>
