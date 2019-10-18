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
  <a class="navbar-brand" href="<?php echo base_url(); ?>"> Smartcare</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="textoNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" data-toggle="modal" data-target="#modalServico" href="">Serviços <span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#modalFaleConosco" href="">Fale Conosco</a>
      </li>

    </ul>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modalLogin">
  Acessar
</button>

<!-- Inicio Modal login -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginTitle" aria-hidden="true">
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
<div class="p-0">
<div class="text-center">
<i class="fas fa-stethoscope"></i>
<h1 class="h4 text-gray-900 mb-4">Smartcare</h1>
</div>
<div class="text-center">
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
<a class="small" href="#" data-dismiss="modal" data-toggle="modal" data-target="#modalCadastro">Criar sua conta!</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Fim Modal login -->
<!-- Inicio Modal Serviço -->
<div class="modal fade" id="modalServico" tabindex="-1" role="dialog" aria-labelledby="modalServicoTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle">Smartcare info</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body" style="max-height:500px; overflow-y: auto;">

<p><b>Smartcare</b> é a aplicação voltada para atender os entes mais queridos e amados.
Desenvolvido por aqueles que se preocupam com quem já se importou muito conosco.</p>
<p> Atendemos todos os tipos de usuário
oferecendo um serviço de qualidade e garantia inexistente no mercado.
Nossa missão é assegurar a <b>segurança</b>, <b>bem estar</b> e <b>privacidade</b> de nossos clientes.</p>
</div>
</div>
</div>
</div>







<!--modal fale Conosco -->

<div class="modal fade" id="modalFaleConosco" tabindex="-1" role="dialog" aria-labelledby="modalfaleConosco" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deixe Sua Mensagem</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Mensagem :</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>

<!-- Inicio Modal cadastro -->
<div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="modalCadastroTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle">Requerer cadastro</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body" style="max-height:500px; overflow-y: scroll;">
<!--Fomulario de cadastro-->
<div class="p-0">
<div class="text-left mb-4">
<b>Para utlizar os serviços Smartcare preencha os dados abaixo e um consultor entrará em contato nas próximas 24h:</b>
</div>
<div class="form-group">
<?php echo form_open('cadastro/proposta'); //FORM OPEN ?>

<div class="form-group"> <!-- fechamento marcado ao fim -->

<p align="left">Nome do paciente*
<input type="text" name="nomePaciente" pattern=".{6,100}" class="form-control form-control-user" placeholder="Informe nome do paciente" required>
</p>

<p align="left">CPF do paciente*
<input type="text" name="CPFPaciente" pattern=".{6,100}" class="form-control form-control-user" placeholder="Informe o CPF do paciente" required>
</p>

<p align="left">Nome do responsável*
<input type="text" name="nomeResponsavel" pattern=".{6,100}" class="form-control form-control-user" placeholder="Informe nome do responsável" required>
</p>

<p align="left">Email do responsável*
<input type="email" name="emailResponsavel" pattern=".{6,100}" class="form-control form-control-user" placeholder="Informe o e-mail do responsável" required>
</p>

<p align="left">Telefone do responsável*
<input type="text" name="telefoneResponsavel" pattern=".{6,100}" class="form-control form-control-user" placeholder="Informe o telefone do responsável" required>
</p>

<p align="left">CEP* <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/buscaCep.cfm" target="_blank" ><i class="far fa-question-circle"></i></a>
<input type="tel" pattern="[0-9]{8,}" maxlength="8" title="Digitar apenas números (8 caracteres)" placeholder="Digite seu CEP (apenas números)" class="form-control" name="CEP" id="dcep" autocomplete="off" onblur="pesquisacep(this.value);" required>
</p>

<p align="left">Logradouro*
<input type="text" readonly placeholder="Informe o CEP para preenchimento automático" class="form-control" name="Logradouro" id="dlogradouro"  oninvalid="this.setCustomValidity('Informe o CEP para preenchimento automático da logradouro!')" onchange="this.setCustomValidity()" value="" required>
</p>

<p align="left">Número*
<input type="text" placeholder="Informe o número" class="form-control" name="Numero">
</p>

<p align="left">Unidade*
<input type="text" placeholder="Ex.: apt 101" class="form-control" name="Unidade">
</p>

<p align="left">Bairro*
<input type="text" readonly placeholder="Informe o CEP para preenchimento automático" class="form-control" name="Bairro" id="dbairro" oninvalid="this.setCustomValidity('Informe o CEP para preenchimento automático do bairro!')" onchange="this.setCustomValidity()" value="" required>
</p>

<p align="left">Cidade*
<input type="text" readonly placeholder="Informe o CEP para preenchimento automático" class="form-control" name="Cidade" id="dcidade" oninvalid="this.setCustomValidity('Informe o CEP para preenchimento automático da cidade!')" onchange="this.setCustomValidity()" value="" required>
</p>

<p align="left">Estado*
<input type="text" readonly placeholder="Informe o CEP para preenchimento automático" class="form-control" name="UF" id="duf" oninvalid="this.setCustomValidity('Informe o CEP para preenchimento automático da cidade!')" onchange="this.setCustomValidity()" value="" required>
</p>

<p align="left">Complemento
<input type="text" placeholder="Informe o complemento" class="form-control" name="Complemento">
<input type="hidden" id="dcomplemento" value="">

</p>

</div> <!-- div form group -->

<?php echo form_submit(array('id' => '', 'value' => 'Enviar', 'class'=>'btn btn-primary btn-user btn-block')).form_close(); //BOTÃO DE LOGIN E FOMR CLOSE ?>

</div>
</div>
</div>
</div>
</div>
</div>
<!-- Fim Modal Cadastro -->

</nav>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('template/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('template/css/sb-admin-2.min.css');?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
<?php
//ECHO MENSAGENS DE SUCESSO OU ERRO
echo $this->session->userdata('sucesso');
echo $this->session->userdata('erro');
?>

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
        <img class="d-block w-100 h-auto" src="<?php echo base_url('img/foto1.jgp') ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('img/foto2.jgp') ?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('img/foto3.jgp') ?>" alt="Third slide">
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

<script src="<?php echo base_url('js/cep.js'); ?>"></script>

</html>
