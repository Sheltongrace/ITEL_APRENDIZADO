<header class="app-header fixed-top">
      <div class="app-header-inner">
        <div class="container-fluid py-2">
          <div class="app-header-content">
            <div class="row justify-content-between align-items-center">
              <div class="col-auto">
                <a
                  id="sidepanel-toggler"
                  class="sidepanel-toggler d-inline-block d-xl-none"
                  href="#"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg" 
                    width="30"
                    height="30"
                    viewBox="0 0 30 30" 
                    role="img"
                  >
                    <title>Menu</title>
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-miterlimit="10"
                      stroke-width="2"
                      d="M4 7h22M4 15h22M4 23h22"
                    ></path>
                  </svg>
                </a>
              </div>
              <!--//col-->
              <div class="search-mobile-trigger d-sm-none col">
                <i
                  class="search-mobile-trigger-icon fa-solid fa-magnifying-glass"
                ></i>
              </div>
              <!--//col-->
              <div class="app-search-box col">
                <form class="app-search-form">
                  <input
                    type="text"
                    placeholder="Pesquisar..."
                    name="search"
                    class="form-control search-input"
                  />
                  <button
                    type="submit"
                    class="btn search-btn btn-primary"
                    value="Search"
                  >
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </button>
                </form>
              </div>
              <!--//app-search-box-->

              <div class="app-utilities col-auto">
                <div
                  class="app-utility-item app-notifications-dropdown dropdown"
                >
                  <a
                    class="dropdown-toggle no-toggle-arrow"
                    id="notifications-dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-expanded="false"
                    title="Notifications"
                  >
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                   
                <!--//app-utility-item-->
                <div class="app-utility-item">
                  <a href="settings.html" title="Settings">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <svg
                      width="1em"
                      height="1em"
                      viewBox="0 0 16 16"
                      class="bi bi-gear icon"
                      fill="currentColor"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        
                      />
                      <path
                        
                      />
                    </svg>
                  </a>
                </div>
                <!--//app-utility-item-->

                <div class="app-utility-item app-user-dropdown dropdown">
                  <a
                    class="dropdown-toggle"
                    id="user-dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-expanded="false"
                    ><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg></a>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="user-dropdown-toggle"
                  >
                    <li>
                      <a class="dropdown-item" href="#">Perfil</a>
                    </li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                      <a class="dropdown-item" href="{{ route('site') }}">Sair</a>
                    </li>
                  </ul>
                </div>
                <!--//app-user-dropdown-->
              </div>
              <!--//app-utilities-->
            </div>
            <!--//row-->
          </div>
          <!--//app-header-content-->
        </div>
        <!--//container-fluid-->
      </div>
      <!--//app-header-inner-->
      <div id="app-sidepanel" class="app-sidepanel">
        <div id="sidepanel-drop" class="sidepanel-drop"></div>
        <div class="sidepanel-inner d-flex flex-column">
          <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none"
            >&times;</a
          >
          <div class="app-branding">
            <a class="app-logo" href="homeAdmin.html"
              ><img
                class="logo-icon me-2"
                src="{{asset('backOffice/assets/images/app-logo.svg')}}"
                alt="logo"
              /><span class="logo-text">QuinGrace</span></a
            >
          </div>
          <!--//app-branding-->

          <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
            <ul class="app-menu list-unstyled accordion" id="menu-accordion">
              <li class="nav-item">
                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                <a class="nav-link active" href="homeAdmin.html">
                  <span class="nav-icon">
                    <svg
                      width="1em"
                      height="1em"
                      viewBox="0 0 16 16"
                      class="bi bi-house-door"
                      fill="currentColor"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"
                      />
                      <path
                        fill-rule="evenodd"
                        d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"
                      />
                    </svg>
                  </span>
                  <span class="nav-link-text">Visã0 Geral</span> </a
                ><!--//nav-link-->
              </li>
              
             
               <!--//nav-item-->
               <li class="nav-item has-submenu">
                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                <a
                  class="nav-link submenu-toggle"
                  href="#"
                  data-bs-toggle="collapse"
                  data-bs-target="#submenu-1"
                  aria-expanded="false"
                  aria-controls="submenu-1"
                >
                  <span class="nav-icon">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>
                  </span>
                  <span class="nav-link-text">Formadores </span>
                  <span class="submenu-arrow">
                    <svg
                      width="1em"
                      height="1em"
                      viewBox="0 0 16 16"
                      class="bi bi-chevron-down"
                      fill="currentColor"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        fill-rule="evenodd"
                        d="M1.646 4.646a.5.5 0 0 1 .
                        708 0L8 10.293l5.646-5.647a.
                        5.5 0 0 1 .708.708l-6 6a.5.5
                         0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg> 
                  </span
                  >
              
                  <!--//submenu-arrow--> </a
                >
                
                <!--//nav-link-->
                <div
                  id="submenu-1" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
                  <ul class="submenu-list list-unstyled">
                    <li class="submenu-item">
                      <a class="submenu-link" href="{{ route('formador.create') }}">Registrar</a>
                    </li>
                    <li class="submenu-item">
                      <a class="submenu-link" href="{{ route('formador.index') }}">Listar</a>
                    </li>
                  </ul>
                </div>
              </li>
              
              
              <!--//nav-item--> <!--//nav-item-->
              <li class="nav-item has-submenu">
                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                <a
                  class="nav-link submenu-toggle"
                  href="#"
                  data-bs-toggle="collapse"
                  data-bs-target="#submenu-2"
                  aria-expanded="false"
                  aria-controls="submenu-2"
                >
                  <span class="nav-icon">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>
                  </span>
                  <span class="nav-link-text">Alunos</span>
                  <span class="submenu-arrow">
                    <svg
                      width="1em"
                      height="1em"
                      viewBox="0 0 16 16"
                      class="bi bi-chevron-down"
                      fill="currentColor"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        fill-rule="evenodd"
                        d="M1.646 4.646a.5.5 0 0 1 .
                        708 0L8 10.293l5.646-5.647a.
                        5.5 0 0 1 .708.708l-6 6a.5.5
                         0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg> 
                  </span
                  >
                
                  <!--//submenu-arrow--> </a
                ><!--//nav-link-->
                <div
                  id="submenu-2" class="collapse submenu submenu-2" data-bs-parent="#menu-accordion">
                  <ul class="submenu-list list-unstyled ">
                    <li class="submenu-item">
                      <a class="submenu-link" href="{{ route('admin.aluno.create') }}">Registrar</a>
                    </li>
                    <li class="submenu-item ">
                      <a class="submenu-link" href="{{ route('admin.aluno') }}">Listar</a>
                    </li>
                  </ul>
                </div>
              </li>
              
              
              <li class="nav-item has-submenu ">
                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                <a
                  class="nav-link submenu-toggle"
                  href="#"
                  data-bs-toggle="collapse"
                  data-bs-target="#submenu-3"
                  aria-expanded="false"
                  aria-controls="submenu-3">
                  <span class="nav-icon">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-safe2-fill" viewBox="0 0 16 16">
  <path d="M6.563 8H5.035a3.5 3.5 0 0 1 .662-1.596l1.08 1.08q-.142.24-.214.516m.921-1.223-1.08-1.08A3.5 3.5 0 0 1 8 5.035v1.528q-.277.072-.516.214M9 6.563V5.035a3.5 3.5 0 0 1 1.596.662l-1.08 1.08A2 2 0 0 0 9 6.563m1.223.921 1.08-1.08c.343.458.577 1.003.662 1.596h-1.528a2 2 0 0 0-.214-.516M10.437 9h1.528a3.5 3.5 0 0 1-.662 1.596l-1.08-1.08q.142-.24.214-.516m-.921 1.223 1.08 1.08A3.5 3.5 0 0 1 9 11.965v-1.528q.277-.072.516-.214M8 10.437v1.528a3.5 3.5 0 0 1-1.596-.662l1.08-1.08q.24.142.516.214m-1.223-.921-1.08 1.08A3.5 3.5 0 0 1 5.035 9h1.528q.072.277.214.516M7.5 8.5a1 1 0 1 1 2 0 1 1 0 0 1-2 0"/>
  <path d="M2.5 1A1.5 1.5 0 0 0 1 2.5V3H.5a.5.5 0 0 0 0 1H1v4H.5a.5.5 0 0 0 0 1H1v4H.5a.5.5 0 0 0 0 1H1v.5A1.5 1.5 0 0 0 2.5 16h12a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 14.5 1zm6 3a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9"/>
</svg>
                  </span>
                  <span class="nav-link-text">Cursos</span>
                  <span class="submenu-arrow">
                    <svg
                      width="1em"
                      height="1em"
                      viewBox="0 0 16 16"
                      class="bi bi-chevron-down"
                      fill="currentColor"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        fill-rule="evenodd"
                        d="M1.646 4.646a.5.5 0 0 1 .
                        708 0L8 10.293l5.646-5.647a.
                        5.5 0 0 1 .708.708l-6 6a.5.5
                         0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg> 
                  </span
                  ><!--//submenu-arrow--> </a
                ><!--//nav-link-->
                <div
                  id="submenu-3" class="collapse submenu submenu-3" data-bs-parent="#menu-accordion">
                  <ul class="submenu-list list-unstyled">

                    <li class="submenu-item">
                      <a class="submenu-link" href="{{ route('admin.cursos.create') }}">Registrar</a>
                    </li>

                    <li class="submenu-item">
                      <a class="submenu-link" href="{{ route('admin.cursos') }}">Listar</a>
                    </li>
                  </ul>
                </div>
              </li>
              
              
              <li class="nav-item has-submenu" >
                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                <a
                  class="nav-link submenu-toggle"
                  href="#"
                  data-bs-toggle="collapse"
                  data-bs-target="#submenu-4"
                  aria-expanded="false"
                  aria-controls="submenu-4">
                  <span class="nav-icon">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
  <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2"/>
  <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0"/>
</svg>
                  </span>
                  <span class="nav-link-text">Disciplina</span>
                  <span class="submenu-arrow">
                    <svg
                      width="1em"
                      height="1em"
                      viewBox="0 0 16 16"
                      class="bi bi-chevron-down"
                      fill="currentColor"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        fill-rule="evenodd"
                        d="M1.646 4.646a.5.5 0 0 1 .
                        708 0L8 10.293l5.646-5.647a.
                        5.5 0 0 1 .708.708l-6 6a.5.5
                         0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg> 
                  </span
                  ><!--//submenu-arrow--> </a
                ><!--//nav-link-->
                <div
                  id="submenu-4" class="collapse submenu submenu-4" data-bs-parent="#menu-accordion">
                  <ul class="submenu-list list-unstyled">
                    <li class="submenu-item ">
                      <a class="submenu-link" href="{{ route('admin.disci.create') }}">Registrar</a>
                    </li>
                    <li class="submenu-item ">
                      <a class="submenu-link" href="{{ route('admin.disciplina') }}">Listar</a>
                    </li>
                  </ul>
                </div>
              </li>




              <li class="nav-item has-submenu" >
                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                <a
                  class="nav-link submenu-toggle"
                  href="#"
                  data-bs-toggle="collapse"
                  data-bs-target="#submenu-5"
                  aria-expanded="false"
                  aria-controls="submenu-5">
                  <span class="nav-icon">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stack-overflow" viewBox="0 0 16 16">
  <path d="M12.412 14.572V10.29h1.428V16H1v-5.71h1.428v4.282z"/>
  <path d="M3.857 13.145h7.137v-1.428H3.857zM10.254 0 9.108.852l4.26 5.727 1.146-.852zm-3.54 3.377 5.484 4.567.913-1.097L7.627 2.28l-.914 1.097zM4.922 6.55l6.47 3.013.603-1.294-6.47-3.013zm-.925 3.344 6.985 1.469.294-1.398-6.985-1.468z"/>
</svg>
                  </span>
                  <span class="nav-link-text">Marcação de Aulas</span>
                  <span class="submenu-arrow">
                    <svg
                      width="1em"
                      height="1em"
                      viewBox="0 0 16 16"
                      class="bi bi-chevron-down"
                      fill="currentColor"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        fill-rule="evenodd"
                        d="M1.646 4.646a.5.5 0 0 1 .
                        708 0L8 10.293l5.646-5.647a.
                        5.5 0 0 1 .708.708l-6 6a.5.5
                         0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg> 
                  </span
                  ><!--//submenu-arrow--> </a
                ><!--//nav-link-->
                <div
                  id="submenu-5" class="collapse submenu submenu-5" data-bs-parent="#menu-accordion">
                  <ul class="submenu-list list-unstyled">
                    <li class="submenu-item ">
                      <a class="submenu-link" href="{{ route('aula.create') }}">Agendar</a>
                    </li>
                    <li class="submenu-item ">
                      <a class="submenu-link" href="{{ route('admin.macacao.aula') }}">Ver marcações</a>
                    </li>
                  </ul>
                </div>
              </li>







                <li class="nav-item">
                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                
              
                <a class="nav-link" href="{{ route('admin.caixa.entrada') }}">
                  <span class="nav-icon">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
</svg>
                  </span>
                  
                  <span class="nav-link-text">Caixa de Mensagens</span>
                  </a
                >
                
              <!--//nav-link-->
                <div
                  id="submenu-2"
                  class="collapse submenu submenu-2"
                  data-bs-parent="#menu-accordion"
                >
                  
                </div>
              </li>   
              <!--//nav-item-->
            </ul>
            <!--//app-menu-->
          </nav>

          
          <!--//app-nav-->
          <div class="app-sidepanel-footer">
            <nav class="app-nav app-nav-footer">
              <ul class="app-menu footer-menu list-unstyled">
                <li class="nav-item">


                
                  <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                  <a class="nav-link" href="settings.html">
                    <span class="nav-icon">
                      <svg
                        width="1em"
                        height="1em"
                        viewBox="0 0 16 16"
                        class="bi bi-gear"
                        fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"
                        />
                        <path
                          fill-rule="evenodd"
                          d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"
                        />
                      </svg>
                    </span>                    
                    <span class="nav-link-text">Definições</span> </a
                  ><!--//nav-link-->
                </li>            
                <!--//nav-item-->
              </ul>
              <!--//footer-menu-->
            </nav>
          </div>
          <!--//app-sidepanel-footer-->
        </div>
        <!--//sidepanel-inner-->
      </div>
      <!--//app-sidepanel-->
    </header>
    <!--//app-header-->


    


    