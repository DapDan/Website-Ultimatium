<?php
    //echo "Bom dia!";
      
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'dan250704PJXD204!';
    $dbName = 'formulario_danilo';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if($conexao->connect_errno){
        echo "Erro";
    } else {
        echo "Foi, mas não sei como!";
    }

?>