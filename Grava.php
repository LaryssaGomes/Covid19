<?php
    include("conecta.php");
    $nome = $_GET["nome"];
    $local = $_GET["local"];
    $febre = $_GET["febre"];
    $tosse = $_GET["tosse"];
    $garganta = $_GET["garganta"];
    $paladarouolfato = $_GET["paladarouolfato"];
    $dificuldadederespirarfaltadear = $_GET["dificuldadederespirarfaltadear"];
    $diarreia = $_GET["diarreia"];
    $conjuntivite = $_GET["conjuntivite"];
    $dornopeito = $_GET["dornopeito"];
    $sintomas = array($febre, $tosse, $garganta, $paladarouolfato, $dificuldadederespirarfaltadear, $diarreia, $conjuntivite, $dornopeito);
    $cont=0;
    for($i = 0;$i < 8;$i++){
        if($sintomas[$i]=='sim'){
            $cont++;
            
        }
    }
    if($cont <=2){
        $porcentagem = 'baixa';
    }
    else if($cont > 2 && $cont <=4 ){
        $porcentagem = 'média';
    }
    else if($cont >4 && $cont <=6 ){
        $porcentagem = 'alta';
    }
    else if($cont >6 && $cont <=8 ){
        $porcentagem = 'muito alto';
    }
    
    mysqli_query($conexao, "insert into dados (nome, local, situa) values ('$nome', '$local', '$porcentagem')");

    header("location:SalvaDados.php");
?>