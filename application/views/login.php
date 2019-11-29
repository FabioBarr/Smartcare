
<!doctype html>
<html lang="en">

  <head>
    <title>SmartCare &mdash; Monitoramento de Pessoas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('home/images/apple-touch-icon.png')?>">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
  <link rel="manifest" href="images/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">



    
    <link rel="shortcut icon" href="">

    <link href="https://fonts.googleapis.com/	?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('home/fonts/icomoon/style.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('home/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('home/css/jquery.fancybox.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('home/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('home/css/owl.theme.default.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('home/fonts/flaticon/font/flaticon.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('home/css/aos.css')?>">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url('home/css/style.css')?>">
    <style>
      .btn-secondary:hover {
        background-color: #18b1b7;
      }

      .icon-question_answer {
        color: #18b1b7 !important;
      }

      .btn-meu {
        background-color: #18b1b7 !important;
      }
    </style>

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Carregando...</span>
      </div>
    </div>

    <div class="site-wrap" id="home-section">
      
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
    


      <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">


            <div class="site-logo">
              <a href="index.html" class="text-black">
                 <img src="<?php echo base_url('home/images/logo.png')?>" style="width: 65px;">
                <span class="text-primary" style="color: #18b1b7 !important;">Smartcare</a>
            </div>

            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="#home-section" class="nav-link">Home</a></li>
                  <li><a href="#services-section" class="nav-link">Serviços</a></li>


                  <li>
                    <a href="#about-section" class="nav-link">Sobre</a>
                  </li>

                  <li><a href="#testimonials-section" class="nav-link">Clientes</a></li>
                  <li><a href="#contact-section" class="nav-link">Contato</a></li>
                  <li><a href="#" class="nav-link" data-toggle="modal" data-target="#modalLogin">Acessar</a></li>
                </ul>
              </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>

      <div class="ftco-blocks-cover-1">
        <div class="ftco-blocks-cover-1-content owl-carousel">
          <div>
            <div class="text-image" style="    position: absolute;
            left: 0;
            top: 250px;    width: 100%;     z-index: 99;">
              <div class="container">
                <h1 style="color: #ffff;font-size: 65px;">Smartcare</h1>
                <p style="color: #ffff;     font-size: 20px;">Uma revolução em monitoramento domiciliar</p>
                <a href="#contact-section" class="btn btn-secondary" style="width: 175px;
                height: 50px;
                line-height: 38px;">Contato</a>
              </div>
            </div>
            <img src="<?php echo base_url('home/images/bg1.jpg')?>" style="    height: 100vh;
            object-fit: cover; min-height: 770px; filter: brightness(0.8);">
          </div>
          <div>
              <div class="text-image" style="    position: absolute;
              left: 0;
              top: 250px;    width: 100%;     z-index: 99;">
                <div class="container">
                  <h1 style="color: #ffff;font-size: 65px;">Praticidade</h1>
                  <p style="color: #ffff;     font-size: 20px;">Veja Todas as informações no celular</p>
                  <a href="#contact-section" class="btn btn-secondary" style="width: 175px;
                  height: 50px;
                  line-height: 38px;">Contato</a>
                </div>
              </div>
            <img src="<?php echo base_url('home/images/bg2.jpg')?>" style="    height: 100vh;
            object-fit: cover; min-height: 770px; filter: brightness(0.8);">
          </div>
          
        </div>
        
        <!-- END .ftco-cover-1 -->
        <div class="ftco-service-image-1 pb-5">
          <div class="container">
            <div class="owl-carousel owl-all">
              <div class="service text-center">
                <a href="#"><img src="<?php echo base_url('home/images/medica.jpg')?>" alt="Image" class="img-fluid"></a>
                <div class="px-md-3">
                  <h3><a href="#">Deixe seu Medico Ciente</a></h3>
                  <p>Apresente o relatorio do SmartCare ao médico, facilitando a troca de informações.</p>
                </div>
              </div>
              <div class="service text-center">
                <a href="#"><img src="<?php echo base_url('home/images/medica2.jpg" alt="Image" class="img-fluid')?>"></a>
                <div class="px-md-3">
                  <h3><a href="#">Monitoramento do Pacitente</a></h3>
                  <p>Nosso sistema verifica como o paciente está se comportando, além de seus dados vitais.</p>
                </div>
              </div>
              <div class="service text-center">
                  <a href="#"><img src="<?php echo base_url('home/images/medica3.jpg')?>" alt="Image" class="img-fluid"></a>
                  <div class="px-md-3">
                    <h3><a href="#">Segurança e Privacidade</a></h3>
                    <p>Oferemos total segurança ao cliente, a privacidade do paciente é garantida.</p>
                  </div>
                </div>
            </div>
          </div>
        </div>

      </div>

      <div class="site-section bg-light" id="services-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
              <div class="block-heading-1">
                <h2>Telemetria a serviço da medicina
</h2>
                <p></p>
              </div>
            </div>
          </div>
          <div class="owl-carousel owl-all">
            <div class="block__35630">
              <div class="icon mb-0">
                <span class="flaticon-"></span>
              </div>
              <h3 class="mb-3">Monitoramento em tempo real</h3>
              <p>O sistema monitora em tempo real dados do ambiente, como temperatura, umidade, presença, ruído, bem como dados do paciente, como frequência cardíaca e pressão arterial. </p>
            </div>

            <div class="block__35630">
              <div class="icon mb-0">
                <span class="flaticon-"></span>
              </div>
              <h3 class="mb-3"> Armazenamento dos dados coletados</h3>
              <p>Todos os dados coletados são armazenados ao longo do tempo. Nada é descartado. </p>
            </div>

            <div class="block__35630">
              <div class="icon mb-0">
                <span class="flaticon"></span>
              </div>
              <h3 class="mb-3">Inteligência</h3>
              <p>Com isso temos um sistema inteligente, capaz de aprender com o acúmulo de dados e de prever comportamentos do paciente.
 </p>
            </div>


          </div>
        </div>
      </div>




      <div class="site-section bg-light" id="about-section">

        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
              <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>Smartcare</h2>
                <p>Smartcare é a aplicação voltada para atender os entes mais queridos e amados. Desenvolvido por aqueles que se preocupam com quem já se importou muito conosco.

                  Atendemos todos os tipos de usuário oferecendo um serviço de qualidade e garantia inexistente no mercado. Nossa missão é assegurar a segurança, bem estar e privacidade aos nossos clientes.</p>
              </div>
            </div>
          </div>
        </div>

      </div>



      <div class="site-section bg-light" id="about-section">
        <div class="container">
          <div class="row justify-content-center mb-4 block-img-video-1-wrap">
            <div class="col-md-12 mb-5">
              <figure class="block-img-video-1" data-aos="fade" style="display: flex; justify-content: center;">
                <img src="<?php echo base_url('home/images/logo.png')?>" alt="Image" class="img-fluid">
              </figure>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="row">
                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="">
                  <div class="block-counter-1">
                    <span class="number"><span data-number="3">0</span>+</span>
                    <span class="caption">Anos no mercado</span>
                  </div>
                </div>
                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                  <div class="block-counter-1">
                    <span class="number"><span data-number="40">0</span>+</span>
                    <span class="caption">Colaboradors</span>
                  </div>
                </div>
                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                  <div class="block-counter-1">
                    <span class="number"><span data-number="108">0</span>+</span>
                    <span class="caption">Clientes</span>
                  </div>
                </div>
                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                  <div class="block-counter-1">
                    <span class="number"><span data-number="4">0</span>+</span>
                    <span class="caption">Investidores</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    <center>  <div class="site-section bg-light" id="pricing-section">
        <div class="container">
          <div class="row mb-5 justify-content-center text-center">
            <div class="col-md-7">
              <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>Planos</h2>
                <p></p>
              </div>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="">
              <div class="pricing">
                <h3 class="text-center text-black">Basico</h3>
                <div class="price text-center mb-4 ">
                  <span><span>R$199,90</span>/ mês</span>
                </div>
                <ul class="list-unstyled ul-check success mb-5">

                  <li>Acesso em tempo Real na Aplicação</li>
                  <li>Suporte 24/hrs</li>
		<li> Hardware e instalação </li>
                  
                </ul>
                <p class="text-center">
                  <a href="#" class="btn btn-secondary btn-md">Veja Mais</a>
                </p>
              </div>
            </div>

            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="pricing">
                <h3 class="text-center text-black">Premium</h3>
                <div class="price text-center mb-4 ">
                  <span><span>R$399,90</span>/mês</span>
                </div>
                <ul class="list-unstyled ul-check success mb-5">

                  <li>Acesso em tempo real na aplicação</li>
                  <li>Suporte 24/hrs</li>
                  <li>Análise de dados historicos</li>
                 <li> Hardware e instalação </li>
            	<li> Prevenção de acidentes </li>
                </ul>
                <p class="text-center">
                  <a href="#" class="btn btn-secondary btn-md text-white">Veja Mais</a>
                </p>
              </div>
            </div>


        </div>
      </div>

</center>
      <div class="site-section" id="faq-section">
        <div class="container">
          <div class="row mb-5">
            <div class="block-heading-1 col-12 text-center">
              <h2>Perguntas Frequentes</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">

              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>Mas é seguro, esse SmartCare?</h3>
                <p>É totalmente seguro, pois temos uma equipe completa de profissionais a disposição e desenvolvendo as funcionalidades </p>
              </div>

            </div>
            <div class="col-lg-6">

              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>Que tipo de Aparelho é usado para monitorar?</h3>
                <p>Utilizamos Arduinos, com baixo custo de implementação </p>
              </div>

             
            </div>
          </div>
        </div>
      </div>


      <div class="site-section bg-light block-13" id="testimonials-section" data-aos="fade">
        <div class="container">

          <div class="text-center mb-5">
            <div class="block-heading-1">
              <h2>Clientes Satisfeitos</h2>
            </div>
          </div>

          <div class="owl-carousel nonloop-block-13">

            <div>
              <div class="block-testimony-1 text-center">
                <blockquote class="mb-4">
                  <p>&ldquo;"Hoje fico muito mais tranquila ao sair de casa, pois sei que minha avó encontra-se em boas mãos.".&rdquo;</p>
                </blockquote>
                <figure>
                  <img src="<?php echo base_url('home/images/person_2.jpg')?>" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 mb-4 text-black">Mônica Silva
</h3>

              </div>
            </div>

            <div>
              <div class="block-testimony-1 text-center">


                <blockquote class="mb-4">
                  <p>&ldquo;Encontrei na plataforma total confiança para sair de casa sem preocupação.&rdquo;</p>
                </blockquote>

                <figure>
                  <img src="<?php echo base_url('home/images/person_1.jpg')?>" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 text-black">Daniela Rodrigues</h3>


          </div>

        </div>
      </div>
    </div>



    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
            <div class="block-heading-1">
              
              <h2>Contato</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
            <form action="#" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="Primeiro Nome">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Sobrenome">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Email">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="" id="" class="form-control" placeholder="Mensagem" cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-secondary text-white py-3 px-5" value="Enviar">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">Contato</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Endereço</span>
                  <span>Unilasalle</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Telefone</span><span>21 999999999</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>contato@smartcare.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-7">
                <h2 class="footer-heading mb-4">Sobre</h2>
                <p>Smartcare é a aplicação voltada para atender os entes mais queridos e amados. Desenvolvido por aqueles que se preocupam com quem já se importou muito conosco.
                </p>
              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Menu</h2>
                <ul class="list-unstyled">
                  <li><a href="#">home</a></li>
                  <li><a href="#">Serviços</a></li>
                  <li><a href="#">Sobre</a></li>
                  <li><a href="#">Clientes</a></li>
                  <li><a href="#">Contato</a></li>
                </ul>
              </div>

            </div>
          </div>
          <div class="col-md-4 ml-auto">

           


            <h2 class="footer-heading mb-4">siga-nos</h2>
            <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p class="copyright">
              </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

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
        <img src="<?php echo base_url('home/images/logo.png')?>" width="40">
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
        <a class="small" style="color: #0aacb3 !important;" href="#">Esqueceu a senha?</a>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>

    <script src="<?php echo base_url('home/js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?php echo base_url('home/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('home/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('home/js/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('home/js/jquery.sticky.js')?>"></script>
    <script src="<?php echo base_url('home/js/jquery.waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('home/js/jquery.animateNumber.min.js')?>"></script>
    <script src="<?php echo base_url('home/js/jquery.fancybox.min.js')?>"></script>
    <script src="<?php echo base_url('home/js/jquery.easing.1.3.js')?>"></script>
    <script src="<?php echo base_url('home/js/aos.js')?>"></script>

    <script src="<?php echo base_url('home/js/main.js')?>"></script>


  </body>

</html>
