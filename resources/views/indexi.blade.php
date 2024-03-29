<link href="{{ asset('site/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

<?php
 $cont =1?>

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-10">
<h1>Lista dos alunos</h1></br>
        </div>
            <div class="col-sm-2">
         <a  href="{{route('create_aluno')}}" class="btn btn-success">Gerar Aluno</a>
                
             </div>
            <thead>
                <table class="table mt-3">
                <tr> 
                    <th scope="col">nome</th>
                    <th scope="col">n_processo</th>
                    <th scope="col">ano_lectivo</th>
                    <th scope="col">Editar</th>   

                </tr>

        </div>
            </thead>
            <tbody>
@foreach($alunos as $aluno)

                <tr>
                    <th>{{ $aluno -> nome }}</th>
                    <th>{{ $aluno -> n_processo }}</th>
                    <th>{{ $aluno -> ano_lectivo }}</th>

                    <th class="d-flex"> 

                        <a href="edit/{{ $aluno -> id }}" class="btn btn-primary me-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 
  14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.
  5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
</svg></a>

<form action="{{route('destroy_aluno', $aluno -> id )}}" method="post">
@csrf
@method('delete')

<button type="submit" class="btn btn-danger ">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 
  0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5
   0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg>
</button>

</form>
                    </th>
                </tr>
 @endforeach
            
            </tbody>
    </table>
</div>

