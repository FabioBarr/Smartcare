<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Smartcare</title>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <i class="fas fa-stethoscope"></i>
  <a class="navbar-brand" href="#"> Smartcare</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="textoNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#">Serviços <span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Fale Conosco</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sugestão</a>
      </li>
    </ul>



    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModalCenter">
  Login
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Acesse sua Conta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!--Fomulario de login-->


  <div class="p-5">
    <div class="text-center">
        <i class="fas fa-stethoscope"></i>
      <h1 class="h4 text-gray-900 mb-4">Smartcare</h1>
    </div>
    <div class="text-center">
      <?php
              //ECHO MENSAGENS DE SUCESSO OU ERRO
              echo $this->session->userdata('sucesso');
              echo $this->session->userdata('erro');
      ?>
    </div>
      <div class="form-group">
        <?php echo form_open('login'); //FORM OPEN ?>
        <input type="email" name="email" pattern=".{6,100}" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="E-mail">
      </div>
      <div class="form-group">
        <input type="password" name="senha" pattern=".{4,16}" class="form-control form-control-user" id="exampleInputPassword" placeholder="Senha">
      </div>
      <?php echo form_submit(array('id' => 'Entrar', 'value' => 'Entrar', 'class'=>'btn btn-primary btn-user btn-block')).form_close(); //BOTÃO DE LOGIN E FOMR CLOSE ?>
    <hr>
    <div class="text-center">
      <a class="small" href="#">Esqueceu a senha?</a>
    </div>
    <div class="text-center">
      <a class="small" href="#">Criar sua conta!</a>
    </div>
  </div>
</div>

  </div>
    </div>
  </div>
  </div>
</nav>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('template/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('template/css/sb-admin-2.min.css');?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">



  <div class="container">

    <!-- Outer Row -->


    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('template/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('template/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('template/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('template/js/sb-admin-2.min.js');?>"></script>


  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100 h-auto" src="https://cdn.pixabay.com/photo/2017/12/21/07/40/care-3031259_640.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>












</body>

</html>
