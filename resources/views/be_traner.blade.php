<!DOCTYPE html>
<html lang="pt-pt">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Query , esse so funciona com internet.  deve se colocar para funcionar local-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Be_traning</title>
    <style>
        body {

            color: white;
            background: grey;

        }
    </style>

</head>

<body>
    <!--
  <img  width="100%" src="{{asset('site/assets/img/betrane.jpg')}}" >

  -->
    <div class="">

        <div class="row" style="border-left: 10px solid grey;">
            <div class="col-5">

                <img style="margin-top: 50px;height: 500px; border-radius: 5px; margin-left: 5px" width="103%" src="{{asset('site/assets/img/betrane.jpg')}}">
            </div>
            <div style="height:500px; margin-top: 50px; border-radius : 8px; right: 14px; border-left: 18px solid white" class=" col-7 bg-white ">
                <h3 class="text-center text-dark">Cadastrar-se como Formador</h3>
                <form action="{{ route('add_formadores') }}" method="post">
                    @csrf
                    <!-- Bloco de input 6 grid por 6 Grid -->
                    <div class="d-flex justify-content-center">
                        <div class="col-6 form-group">
                            <label style="font-size: 0.8rem" for="nome" class="form-label text-dark">Nome Completo <span class="text-danger">*</span> </label>
                            <input type="text" name="user_name" id="nome" class="form-control form-control-sm" placeholder="Digite seu nome" required>
                        </div>
                        <div class="col-6 form-group">
                            <label style="font-size: 0.8rem" for="email" class="form-label text-dark">E-mail<span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control form-control-sm" placeholder="Exemplo@teste.com" required>
                        </div>
                    </div>
                    <!-- End Bloco de input 6 grid por 6 Grid -->
                    <!-- Bloco de input 6 grid por 6 Grid -->
                    <div class="d-flex justify-content-center">
                        <div class="col-6 form-group">
                            <label style="font-size: 0.8rem" for="Identificador Fiscal" class="form-label text-dark">Identificador Fiscal<span class="text-danger">*</span> </label>
                            <input type="text" name="identificador_fiscal" id="Identificador_Fiscal" class="form-control form-control-sm" placeholder="xxxxxxLAxx" required>
                        </div>
                        <div class="col-6 form-group">
                            <label style="font-size: 0.8rem" for="number" class="form-label text-dark">N_telemovel<span class="text-danger">*</span> </label>
                            <input type="numer" name="N_telemovel" id="numero" class="form-control form-control-sm" placeholder="9xx xxx xxx" required>
                        </div>
                    </div>
                    <!-- End Bloco de input 6 grid por 6 Grid  está duplicado-->
                    <div class="d-flex justify-content-center">
                        <div class="col-6 form-group">
                            <label style="font-size: 0.8rem"   for="nivel_acesso" class="form-label text-dark">Categoria<span class="text-danger">*</span> </label>
                            <input type="text" readonly name="categoria" value="Formador" id="categoria" class="form-control form-control-sm" placeholder="Nível de Acesso" required>
                        </div>
                        <div class="col-6 form-group">
                            <label style="font-size: 0.8rem" for="nivel_academico" class="form-label text-dark">Nivel_academico<span class="text-danger">*</span></label>
                            <input type="text" name="nivel_academico" class="form-control form-control-sm" placeholder="Informe seu nível" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="col-6 form-group">
                            <label style="font-size: 0.8rem" for="genero" class="form-label text-dark">Genero<span class="text-danger">*</span> </label>
                            <select name="genero" id="genero" class="form-control form-control-sm">
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                            </select>
                        </div>
                        <div class="col-6 form-group">
                            <label style="font-size: 0.8rem" for="tempo_disponível" class="form-label text-dark">Tempo_disponivel<span class="text-danger">*</span> </label>
                            <select name="tempo_disponivel" id="tempo_disponivel" class="form-control form-control-sm">
                                <option value="Manhã">Manhã</option>
                                <option value="Tarde">Tarde</option>
                                <option value="Noite">Noite</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-3">
                        <button id="btnEnviar" type="submit" class="btn btn-primary">Enviar</button>
                    </div>
            </div>
            </form>
        </div>
    </div>

</body>
<script>
    $("#btnSalvar").click(function() {
        validar()
    })

    function validar() {
        if ($("#nome").val() == '') { // se o campo nome for vazio, tambrm podemos validar o tipo de dados ou caracter
            console.log("nome vazio")
        }
    }
</script>

</html>