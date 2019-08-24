


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
    <div>'.$infoDados->Nome.'</div>
    <div>'.$infoDados->Idade.'</div>';
}

?>
</div>

</html>