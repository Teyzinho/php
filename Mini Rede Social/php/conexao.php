<?php
    $servidor = "localhost";
    $database = "miniRedeSocial";
    $usuario = "root";
    $senha = "root";

    $conexao = mysqli_connect($servidor, $usuario, $senha , $database);

    if(!$conexao){
        die("Falha na conexão" .mysqli_connect_error());
    }else{
        echo("Conexão realizada com sucesso<br>");
    }
?>