
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <h1 class="">GreenGrace</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#" class="active">Início</a></li>
          <li><a href="{{ route('site.sobre.nos') }}">Sobre nós</a></li>
          <li><a href="{{ route('site.disciplina') }}">Disciplinas</a></li>
          <li><a href="{{ route('site.aluno') }}">Alunos</a></li>
          <li><a href="{{ route('site.formador') }}">Formadores</a></li>
          <li><a href="{{ route('site.contato') }}">Contacto</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ route('auth.login') }}" target="_blank">Login</a>
      <a class="btn-getstarted" id="btn-register" href="{{ route('auth.register') }}" target="_blank">Insecrever-se</a>

    </div>
  </header>
