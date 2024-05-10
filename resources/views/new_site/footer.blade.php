
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links Direitos</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sobre nós</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Serviços</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Alunos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Professores</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nossos serviços</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contactos</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Telefone:</strong> +244 925 111 212<br>
              <strong>Email:</strong> quingrace@gmail.com.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Sobre a QuinGrace</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>QuinGrace</span></strong> all rights reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/ -->
        Designer feito pela <a href="https://bootstrapmade.com/">QuinGrace</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>




<!-- Modal -->
<div class="modal fade" id="Modal_Entrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Entrar Como <span id="txt_title"></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
  <!-- btn entrar   -->
        <p class="d-inline-flex gap-1">
            <button type="button" class="btn btn-primary btnAluno" data-bs-toggle="button" aria-pressed="true">Aluno</button>
            <button type="button" class="btn btn-outline-secondary btnFormador" data-bs-toggle="button">Formador</button>
         </p>

  <!--  end button  -->
   <!-- form   -->
   <form id="formLogar"   class="row g-3 needs-validation" action="{{ route('aluno_entrar') }}" method="post" novalidate>
        @csrf
        <div class="col-md-12 mt-4">
            <label for="validationCustom01" class="form-label">Login</label>
            <input name="login" type="text" class="form-control" id="login"  required>
            <div class="invalid-feedback">
               Campo obrigatório
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom02" class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" id="senha"  required>
            <div class="invalid-feedback">
               Campo obrigatório
            </div>
        </div>
   </form>
    <!-- end form  -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button id="btnEntrar" type="button" class="btn btn-warning" style="color: #fff !important;">Entrar</button>
      </div>
    </div>
  </div>
</div>

<!-- end Modal -->


<!-- Modal -->
<div class="modal fade" id="Modal_Candastrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastar Como <span id="txt1_title"></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
  <!-- btn entrar   -->
        <p class="d-inline-flex gap-1">
            <button type="button" class="btn btn-primary btnAluno_cadastro" data-bs-toggle="button" aria-pressed="true">Aluno</button>
            <button type="button" class="btn btn-outline-secondary btnFormador_cadastro" data-bs-toggle="button">Formador</button>
         </p>

  <!--  end button  -->
   <!-- form  formador -->
   <form class="row g-3  formAdd_formador" action="{{ route('formador.save') }}" method="post" novalidate>
    @csrf
   <div class="row mb-4 mt-4">
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Nome</label>
            <input name="nome" type="text" class="form-control" id=""  required>
            <div class="invalid-feedback">
                Campo obrigatório
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id=""  required>
            <div class="invalid-feedback">
                Campo obrigatório
            </div>
        </div>
     </div>
     <div class="row mb-4">
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Telefone</label>
            <input name="telefone" type="text" class="form-control" id=""  required>
            <div class="invalid-feedback">
                Campo obrigatório
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Morada</label>
            <input name="morada" type="text" class="form-control" id=""  required>
            <div class="invalid-feedback">
                Campo obrigatório
            </div>
        </div>
     </div>

     <div class="row mb-4">
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Indentificação Fiscal (BI)</label>
            <input name="identificador_fiscal" type="text" class="form-control" id=""  required>
            <div class="invalid-feedback">
                Campo obrigatório
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Gênero</label>
            <select name="genero" id="" class="form-control">
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
            <div class="invalid-feedback">
                Campo obrigatório
            </div>
        </div>
     </div>

     <div class="row mb-4">
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Disciplina</label>
            <select name="disciplina" id="" class="form-control">
                <option value="Mat">Matematica</option>
                <option value="Fis">Física</option>
            </select>
            <div class="invalid-feedback">
                Campo obrigado
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Nível Acadêmico</label>
            <select name="nivel_academico" id="" class="form-control">
                <option value="Masculino">10 Classe</option>
                <option value="Feminino">11 Classe</option>
            </select>
            <div class="invalid-feedback">
                Campo obrigatório
            </div>
        </div>
     </div>

     <div class="row mb-4">
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Imagem</label>
            <input name="imagem" type="file" class="form-control" id=""  required>
            <div class="invalid-feedback">
                Campo obrigatório
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Senha</label>
            <input name="senha" type="text" class="form-control" id=""  required>
            <div class="invalid-feedback">
                Campo obrigatório
            </div>
        </div>
     </div>

   </form>
    <!-- end form  formador -->
     <!-- form  aluno -->
   <form class="row g-3  formAdd_aluno" action="{{ route('aluno.save') }}" method="post" novalidate>
   @csrf
   <div class="row mb-4 mt-4">
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Nome</label>
            <input name="nome" type="text" class="form-control" id=""  required>
            <div class="invalid-feedback">
                Campo obrigatório
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id=""  required>
            <div class="invalid-feedback">
                Campo obrigatório
            </div>
        </div>
     </div>
     <div class="row mb-4">
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Telefone</label>
            <input name="telefone" type="text" class="form-control" id=""  required>
            <div class="invalid-feedback">
                Campo obrigatório
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Morada</label>
            <input name="morada" type="text" class="form-control" id=""  required>
            <div class="invalid-feedback">
                Campo obrigatório
            </div>
        </div>
     </div>

     <div class="row mb-4">
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Indentificação Fiscal (BI)</label>
            <input name="telefone" type="text" class="form-control" id=""  required>
            <div class="invalid-feedback">
                Campo obrigatório
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Gênero</label>
            <select name="genero" id="" class="form-control">
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
            <div class="invalid-feedback">
                Campo obrigatório
            </div>
        </div>
     </div>

     <div class="row mb-4">
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Numero de Processo</label>
            <input name="processo" type="text" class="form-control" id=""  required>
            <div class="invalid-feedback">
                Campo obrigado
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Classe</label>
            <select name="nivel_academico" id="" class="form-control">
                <option value="Masculino">10 Classe</option>
                <option value="Feminino">11 Classe</option>
            </select>
            <div class="invalid-feedback">
                Campo obrigatório
            </div>
        </div>
     </div>

       <div class="row mb-4">
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Senha</label>
            <input name="senha" type="text" class="form-control" id=""  required>
            <div class="invalid-feedback">
                Campo obrigatório
            </div>
        </div>
     </div>

   </form>
    <!-- end form  aluno -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button id="btnCadastro" type="button" class="btn btn-warning" style="color: #fff !important;">Cadastrar</button>
      </div>
    </div>
  </div>
</div>

<!-- end Modal -->

  <!-- Vendor JS Files   -->
  <script src=" {{asset('new_site/vendor/aos/aos.js')}}"></script>
  <script src=" {{asset('new_site/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src=" {{asset('new_site/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src=" {{asset('new_site/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src=" {{asset('new_site/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src=" {{asset('new_site/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src=" {{asset('new_site/js/main.js')}}"></script>
  <script src=" {{asset('new_site/js/jquery.js')}}"></script>
  <script src=" {{asset('new_site/js/alert.js')}}"></script>
  <script>
    //area aluno
$(".formAdd_formador").hide();    
$("#txt_title").text(' Aluno')
$("#txt1_title").text(' Aluno')
var cont = 1;
$('.btnAluno').click(function() {
    $("#txt_title").text(' Aluno')
     cont = 1;
    $('.btnAluno').removeClass('btn-outline-secondary')
    $('.btnAluno').addClass('btn-primary')

    $('.btnFormador').addClass('btn-outline-secondary')
    $('.btnFormador').removeClass('btn-primary')
})     
$('.btnFormador').click(function() {
    $("#txt_title").text(' Formador')
     cont = 2;
    $('.btnFormador').removeClass('btn-outline-secondary')
    $('.btnFormador').addClass('btn-primary')

    $('.btnAluno').addClass('btn-outline-secondary')
    $('.btnAluno').removeClass('btn-primary')
})  
$("#btnEntrar").click(function(){
    if (cont== 1) {
        if (validar()==1) {
            console.log($("#formLogar").serialize())
            $.ajax({
            url: "{{ route('auth.login.aluno') }}", 
            method: "get",
            data: $("#formLogar").serialize(),
            success: function(rs){
              console.log(rs);
             
              if (rs.estado== 1) {
                $("#formLogar").submit();
              }else{
             
                  alert('Falha','Login ou senha incorreto/as','warning');
              }
              
             },
             beforeSend: function(rs) {
             
             }
        });
          
            
        }
       
    }else{
        if (validar()==1) {
          console.log($("#formLogar").serialize())
          $.ajax({
            url: "{{ route('auth.login.formador') }}", 
            method: "get",
            data: $("#formLogar").serialize(),
            success: function(rs){
              console.log(rs);
             
              if (rs.estado== 1) {
                $("#formLogar").submit();
              }else{
             
                  alert('Falha','Login ou senha incorreto/as','warning');
              }
              
             },
             beforeSend: function(rs) {
             
             }
        });
        }
        
    }
})


// Example starter JavaScript for disabling form submissions if there are invalid fields
var cont_in1= 0;
var cont_in2= 0;
function validar(){
    var rs = 0;
    if ($('#login').val()=='') {
        cont_in1 = 0;
        $('#login').css({'border-color': 'red'})
    }else{
        cont_in1 = 1;
        $('#login').css({'border-color': '#000'})
    }
    if ($('#senha').val()=='') {
        cont_in2 = 0;
        $('#senha').css({'border-color': 'red'})
    }else{
        cont_in2 = 1;
        $('#senha').css({'border-color': '#000'})
    }
    if ( cont_in1 == 1 &&  cont_in2 ==1) {
        rs = 1;
    }
    return rs;
}
// area formador
var cont_f = 1;
$('.btnAluno_cadastro').click(function() {
    $("#txt1_title").text(' Aluno')
    $(".formAdd_formador").hide();
    $(".formAdd_aluno").show();  
     cont_f = 1;
    $('.btnAluno_cadastro').removeClass('btn-outline-secondary')
    $('.btnAluno_cadastro').addClass('btn-primary')

    $('.btnFormador_cadastro').addClass('btn-outline-secondary')
    $('.btnFormador_cadastro').removeClass('btn-primary')
})     
$('.btnFormador_cadastro').click(function() {
    $("#txt1_title").text(' Formador')
    $(".formAdd_formador").show();  
    $(".formAdd_aluno").hide();   
     cont_f = 2;
    $('.btnFormador_cadastro').removeClass('btn-outline-secondary')
    $('.btnFormador_cadastro').addClass('btn-primary')

    $('.btnAluno_cadastro').addClass('btn-outline-secondary')
    $('.btnAluno_cadastro').removeClass('btn-primary')
})  
$("#btnCadastro").click(function(){
    if (cont_f== 1) {// cadastro do aluno
        console.log($(".formAdd_aluno").serialize())
        $.ajax({
            url: "{{ route('verificar.formador') }}", 
            method: "get",
            data: $(".formAdd_aluno").serialize(),
            success: function(rs){
              console.log(rs);
             
              if (rs.estado== 1) {
                 alert('Falha','Já existe um usuário com esse email','warning');
              }else{
                $(".formAdd_aluno").submit();
               
                 // alert('Falha','Já um usuário com esse email','success');
              }
              
             },
             beforeSend: function(rs) {
             
             }
        });
        
       
    }else{//cadastro do formador
       // if (validar()==1) {
        console.log($(".formAdd_formador").serialize())
       // if (validar()==1) { verificar.formador
        $.ajax({
            url: "{{ route('verificar.formador') }}", 
            method: "get",
            data: $(".formAdd_formador").serialize(),
            success: function(rs){
              console.log(rs);
             
              if (rs.estado== 1) {
                 alert('Falha','Já existe um usuário com esse email','warning');
              }else{
                $(".formAdd_formador").submit();
               
                 // alert('Falha','Já um usuário com esse email','success');
              }
              
             },
             beforeSend: function(rs) {
             
             }
        });
           // alert('Cadatar Formador')
       // }
        
    }
})
function alert(title,msg,tipo) {
  Swal.fire({
              title: title,
              text: msg,
              icon: tipo
  });
}

  </script>


</body>

</html>