<?php
    //dados
    $servidor = "localhost";
    $usuario = "root";
    $senha = "751933";
    $database = "postagem";

    //efetuar conexão
    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    if(!$conexao){
        echo "Erro ao conectar ao Banco de dados";
    }

?>