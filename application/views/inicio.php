<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />

<meta name="description" content="ESCREVER DESCRIÇÃO AQUI">
<meta name="keywords" content="ESCREVER PALAVRAS CHAVE AQUI">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
<!-- CORES TEMA PARA NAVEGADOR Chrome, Firefox OS e Opera -->
<meta name="theme-color" content="#FFDEA3">
<!-- CORES TEMA PARA NAVEGADOR Windows Phone -->
<meta name="msapplication-navbutton-color" content="#FFDEA3">
<!-- CORES TEMA PARA NAVEGADOR iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#FFDEA3">

<!-- 
KIT FAVICON PARA MOBILE E DESKTOP

<link rel="shortcut icon" href="" type="image/x-icon">
<link rel="icon" href="" type="image/png">
<link href="" rel="apple-touch-icon">
<link href="" rel="icon" sizes="192x192">
<link href="" rel="apple-touch-icon" sizes="180x180">
<link href="" rel="192" sizes="167x167">
<link href="" rel="apple-touch-icon" sizes="152x152">
<link href="" rel="icon" sizes="128x128">
-->

<title>Smartcare</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<link href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('bootstrap/css/bootstrap-grid.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('bootstrap/css/bootstrap.min.css.map');?>" rel="stylesheet">

<!-- ATUALIZA Sensores -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
    function refresh_div() {
        $(function(){
            $("#refresh").load("<?php echo base_url(); ?>");
        });
    }
    setInterval(refresh_div, 40000); 
</script>

</head>
<body>
<div id="refresh" class="container">
<div><h1>Smartcare</h1></div>
<div>Paciente: <?php echo $Sensores[0]->Paciente; ?> </div>
<div>Idade: <?php echo $Sensores[0]->Idade; ?></div>
<div class="col-lg-12">
<div class="row p-1 m-1">
<?php

foreach($Ambientes as $infoAmbientes){

    echo '
        <div class="card m-2 p-2" style="background-color: #FAFAD2;">
        <div class="card-body">
        <h4 class="card-title">'.$infoAmbientes->Ambiente.'</h4>';
            
            foreach($Sensores as $infoSensores){
                if($infoSensores->idAmbiente == $infoAmbientes->idAmbiente){
                    echo '
                    <div class="card m-1 p-1">
                    <div class="card-body">
                    
                    <div><h5>'.$infoSensores->Nome.'</h5></div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated active" role="progressbar" aria-valuenow="'.$infoSensores->Leitura.'"
                        aria-valuemin="0" aria-valuemax="100" style="width:'.$infoSensores->Leitura.'%">
                        '.$infoSensores->Leitura.'ºC
                        </div>
                        </div>
                    <div>Status do Sensor: ';
                    if($infoSensores->Status)
                        echo
                            '<font style="color: #008000">Em funcionamento</font>';
                    else
                        echo
                            '<font style="color: #DC143C">Desligado</font>';
                    echo '
                    </div>
                    <div>Ativado em: '.$infoSensores->AtivadoEm.'</div>
                    <div>Desativado em: '.$infoSensores->DesativadoEm.'</div>
                    </div>
                    </div>
                    ';
                }
            }

    echo '
    </div>
    </div>
    ';
}
?>
</div>
</div>
</div>
</div>
</body>
</html>