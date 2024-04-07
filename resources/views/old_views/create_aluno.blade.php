<!DOCTYPE html>
<html lang="en">
<head>

<escript href="https://code.jquery.com/jquery-3.7.1.min.js"></escript>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazer login</title>
    <style>
        body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg,blue,red); 
        }
        div{
            background-color: rgba(0,0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
         transform: translate(-50%,-50%);
         padding: 80px;
         border-radius: 10px;
         color: white;
        }
        input{
            pad: 15px;
            outline: none;
            border-radius: none;
            font-size: 17px;  
        }
        button{
            background-color: dodgerblue;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        button:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>

<form action="{{ route ('store_aluno') }}" method="post">

@csrf

    <div>
            <h1>Criar Aluno</h1>
        <input type="text" placeholder="Nome completo" name="nome"  >
        <br><br/>
        <input type="number" placeholder="Processo" name="n_processo" >
        <br></br>
        <input type="year" placeholder="Ano Lectivo" name="ano_lectivo" >
        <br></br>
        <button type="submit"  style="background-color: darkgreen;">Criar</button><br><br>
        <button type="submit" style="background-color: darkgreen;"><a class="active" href="ind">Voltar</a></li>
    
    </div> 
</form>  

</body>
</html>