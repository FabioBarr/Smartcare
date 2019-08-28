


<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
    function refresh_div() {
    $(function(){
       $("#list1").load("<?php echo base_url(); ?>");
    });
    }

    t = setInterval(refresh_div,10000);
</script>
<html>
<div id="list1">
<?php

foreach($Dados as $infoDados){
    echo '
    <div>Paciente: '.$infoDados->Paciente.'</div>
    <div>Idade: '.$infoDados->Idade.'</div>
    <div>Ambiente: '.$infoDados->Ambiente.'</div>
    <div>Código do Sensor: '.$infoDados->idSensor.'</div>
    <div>Status do Sensor: ';
    if($infoDados->Status)
        echo
            'Em funcionamento';
    else
        echo
            'Desligado';
    echo '
    </div>
    <div>Ativado em: '.$infoDados->AtivadoEm.'</div>
    <div>Desativado em'.$infoDados->DesativadoEm.'</div>
    <div>Leitura: '.$infoDados->Leitura.'</div>

    ';
}

?>
</div>

</html>