<?php
        $servidor = "localhost"; //nome do servidor
        $database = "registroEscola"; //nome do banco de dados
        $usuario = "root"; //usuario
        $senha = "root"; //senha

        $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

        
        
        if(!$conexao){
            die("Falha na conexão" .mysqli_connect_error());
        }else{
            echo("Conexão realizada com sucesso");
        }

?>