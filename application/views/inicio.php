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
<meta name="theme-color" content="#FAFAD2">
<!-- CORES TEMA PARA NAVEGADOR Windows Phone -->
<meta name="msapplication-navbutton-color" content="#FAFAD2">
<!-- CORES TEMA PARA NAVEGADOR iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#FAFAD2">
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
<title>Smartcare - Paciente: <?php echo $Sensores[0]->Paciente; ?></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<link href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('bootstrap/css/bootstrap-grid.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('bootstrap/css/bootstrap.min.css.map');?>" rel="stylesheet">
<!-- ATUALIZA Sensores -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<script>
function leitura() {

  $.ajax({
        url: "<?php echo site_url('index.php/refresh')?>",
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
//interval = setInterval(leitura, 5000); 
leitura();   
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
$leitura_tem_hum = 0;
$leitura_ultima_leitura = 0;
$leitura_ativado_em = 0;
$leitura_desativado_em = 0;


foreach($Ambientes as $infoAmbientes){
    date_default_timezone_set('America/Sao_Paulo');

    echo '
        <div class="card m-2 p-2" style="background-color: #FAFAD2;">
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
</div>
</div>
</div>
</body>
</html>