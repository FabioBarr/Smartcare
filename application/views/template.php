<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Smartcare</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('template/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('template/css/sb-admin-2.min.css');?>" rel="stylesheet">
<!-- ATUALIZA Sensores -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<script>
function leitura() {

  $.ajax({
        url: "<?php echo site_url('refresh')?>",
        type: "GET",
        dataType: "JSON",
        success: function(data) {
            if (data[0] === undefined) return;
            i = 0;
            jQuery.each(data, function() {
                if(data[i].LeituraTemperatura){
                $('#LeituraTemperatura'+i).text(data[i].LeituraTemperatura);
                document.getElementById('LeituraTemperatura'+i).style.width = data[i].LeituraTemperatura+'%';
                console.log($('#LeituraTemperatura'+i));
                }
                if(data[i].LeituraHumidade){
                $('#LeituraHumidade'+i).text(data[i].LeituraHumidade);
                document.getElementById('LeituraHumidade'+i).style.width = data[i].LeituraHumidade+'%';
                console.log($('#LeituraHumidade'+i));
                }
                if(data[i].AtivadoEm){
                $('#AtivadoEm'+i).text(data[i].AtivadoEm);
                console.log($('#AtivadoEm'+i));
                }
                if(data[i].DesativadoEm){
                $('#DesativadoEm'+i).text(data[i].DesativadoEm);
                console.log($('#DesativadoEm'+i));
                }
                if(data[i].LeituraEm){
                $('#LeituraEm'+i).text(data[i].LeituraEm);
                console.log($('#LeituraEm'+i));
                }
                i++;
            });
        }
  });
}
interval = setInterval(leitura, 5000);

</script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('index.php/login/deslogar') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-stethoscope"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Smartcare</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Configuração</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilidades</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Sensores
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Navegar</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Conta:</h6>
            <a class="collapse-item" href="#">Editar</a>
            <a class="collapse-item" href="#">Adicionar sensores</a>
            <div class="collapse-divider"></div>

          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Gráficos</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/login/deslogar') ?>">
        <i class="fas fa-sign-out-alt"></i>
          <span>Sair</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->

              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Visão geral</h1>

            <?php if($User[0]->tipoUsuario == 2){
              echo 'Paciente: '.$User[0]->Nome;
            } else if($User[0]->tipoUsuario == 1){
              echo 'Administrador: '.$User[0]->Nome;
            }
            ?>
          
          </div>
          <div class="col-sm">
                 <button type="button" style="font-size:20px ;"class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                   <i class="fas fa-plus"></i> Sensor
                   </button>

                   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered" role="document">
                       <div class="modal-content">
                         <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLongTitle">Adicionar Sensor</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                           </button>
                         </div>
                         <div class="modal-body">
                         </div>


                           <div class="card-body px-5 pt-0 pb-3 my-0">
                             <form>
                   <fieldset>
                     <div class="form-group">
                       <label>Nome do Cômodo</label>
                       <input type="text" class="form-control" placeholder="Ex: Quarto Lucas">
                     </div>
                     <div class="form-group">
                       <label>Tipo do Sensor</label>
                       <select name="sensor" class="form-control">
                     <option selected disabled>Selecione uma opção</option>
                     <option value="1">Temperatura/Umidade</option>
                     <option value="3">Distância</option>
                     <option value="4">Presença</option>

                       </select>
                     </div>
                           <center><button type="button" class="btn btn-secondary" data-dismiss="modalr">Cancelar</button>
                           <button type="button" class="btn btn-primary">Cadastrar</button></center>
                         </fieldset>
                         </form>
                         </div>
                         </div>
                       </div>
                       </div>

                         </div>

          <!-- Content Row -->
          <div class="row">
          <?php
$leitura_tem_hum = 0;
$leitura_ultima_leitura = 0;
$leitura_ativado_em = 0;
$leitura_desativado_em = 0;

$cor[0]="#FF4500";
$cor[1]="#7FFF00";
$cor[2]="#40E0D0";
$cor[3]="#0000FF";
$cor[4]="#8A2BE2";
$cor[5]="#FF1493";
$cor[6]="#D2691E";

foreach($Ambientes as $infoAmbientes){
    date_default_timezone_set('America/Sao_Paulo');

    echo '
        <div class="card shadow h-100 p-1 m-2" style="border-left-color: '.$cor[$leitura_tem_hum].';">
        <div class="card-body">
        <h4 class="card-title">'.$infoAmbientes->Ambiente.'</h4>';
            foreach($Sensores as $infoSensores){

                if($infoSensores->idAmbiente == $infoAmbientes->idAmbiente){
                    echo '
                    <div class="card m-1 p-1">
                    <div class="card-body">';

                    if($infoSensores->Tipo == 1){


                        echo '

                            <div><h5>'.$infoSensores->Nome.'</h5></div>
                            Temperatura
                            <div class="progress">
                                <div id = "LeituraTemperatura'.$leitura_tem_hum.'" class="progress-bar ';

                                if($infoSensores->Status == 1) //Anima apenas barras de sensores ativos
                                 echo 'progress-bar-striped progress-bar-animated bg-success';
                                 else echo 'bg-danger';

                                echo ' active" role="progressbar1" aria-valuenow="<span id=`LeituraTemperatura'.$leitura_tem_hum.'`></span>"
                                aria-valuemin="0" aria-valuemax="50">
                                <span id="LeituraTemperatura'.$leitura_tem_hum.'">ºC</span>
                                </div>
                            </div>
                            Humidade
                            <div class="progress">
                                <div id = "LeituraHumidade'.$leitura_tem_hum.'" class="progress-bar ';

                                if($infoSensores->Status == 1) //Anima apenas barras de sensores ativos
                                 echo 'progress-bar-striped progress-bar-animated bg-success';
                                 else echo 'bg-danger';

                                echo ' active" role="progressbar2"
                                aria-valuemin="0" aria-valuemax="95">
                                <span><span id="LeituraHumidade'.$leitura_tem_hum.'"></span>%</span>
                                </div>
                            </div>
                        ';

                        $leitura_tem_hum++;


                    } else if($infoSensores->Tipo == 4){


                        echo '<div><h5>'.$infoSensores->Nome.'</h5></div>';
                        if($infoSensores->LeituraPresenca == 1)
                            echo '<b>Paciente presente</b>';
                        else
                            echo '<b>Paciente ausente</b>';

                    }
                    echo '
                    <div>Status do Sensor: ';
                    if($infoSensores->Status)
                        echo
                            '<font style="color: #008000">Em funcionamento</font>';
                    else
                        echo
                            '<font style="color: #DC143C">Desligado</font>';
                    echo '
                    </div>
                    <div>Última Leitura:
                    <span id="AtivadoEm'.$leitura_ultima_leitura.'"</span></div>
                    <div><font style="font-size: 9px;">Ativado em:
                    <span id="DesativadoEm'.$leitura_ativado_em.'"></span></font></div>
                    <div><font style="font-size: 9px;">Desativado em:
                    <span id="LeituraEm'.$leitura_desativado_em.'"></span></font></div>
                    </div>
                    </div>
                    ';
                    $leitura_ultima_leitura++;
                    $leitura_ativado_em++;
                    $leitura_desativado_em++;
                }
            }
    echo '
    </div>
    </div>
    ';
}
?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('template/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('template/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('template/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('template/js/sb-admin-2.min.js');?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('template/vendor/chart.js/Chart.min.js');?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('template/js/demo/chart-area-demo.js');?>"></script>
  <script src="<?php echo base_url('template/js/demo/chart-pie-demo.js');?>"></script>

</body>

</html>
