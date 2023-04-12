<?php
    //dados
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "mcc";

    //efetuar conexão
    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    if(!$conexao){
        echo "Erro ao conectar ao Banco de dados";
    }else{
    }

?>