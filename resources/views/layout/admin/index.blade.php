<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>

    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta
      name="description"
      content="Portal - Bootstrap 5 Admin Dashboard Template For Developers"
    />
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media" />
    <link rel="shortcut icon" href="favicon.ico" />

    <!-- FontAwesome JS-->
    <script defer src="{{asset('backOffice/assets/plugins/fontawesome/js/all.min.js')}}"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{asset('backOffice/assets/css/portal.css')}}" />
     <style>
      .el{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background-color: rgba(0, 0, 0, 0.8);
      }
      .ct{
        margin-top: 300px;
       font-size: 2.3rem;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .p{
      text-align: center;
      }
     </style>
  
  </head>
  <body class="app">
     <div class="els"  disabled>
          
     </div>
     <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="modal_obs" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

    @include('layout.admin.header')
    @yield('content')
    @include('layout.admin.footer') 

  </body>

  <script>
      $('#modal_obs').modal('show');
  </script>
</html>
