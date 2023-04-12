<!DOCTYPE html>
<html lang="en">

<?php
    include("settings/header.php");
    

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCC  - Cadastro</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="css/loginStyle.css">
        <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php

        $select ="SELECT nome,email,cpf,senha FROM usuario";
        $result = mysqli_query($conexao, $select);

        if(isset($_POST["criarConta"])){
            $nomeUsuario = $_POST["nome"];
            $email = $_POST["email"];
            $cpf = $_POST["cpf"];
            $senha = $_POST["senha"];
            $confSenha = $_POST["confSenha"];


            $insert = "INSERT INTO usuario (nome,email,senha,cpf) VALUES('$nomeUsuario','$email','$senha','$cpf')";

            if(mysqli_query($conexao,$insert)){
                echo"Realizado com sucesso";
                echo"logado";

                setcookie("login",$nomeUsuario);
                header("location: ./pagInicial.php");
            }else{
                echo("Falha ao inserir registro:" .$insert ."<br>" . mysqli_error($conexao));
            }
        }else{
        }

    ?>

    <div class="log-content">

        <div class="log-titulo">
            <h1>Criar uma nova conta</h1>
        </div>

        <div class="login">

            <div class="log-btg">
                    <input type="button" value="Login com Google" name="log-btg">
                    <p>ou</p>
            </div>

            <div class="log-form">
                <form action="" method="post">
                    <label for="nome">Nome : </label>
                    <input type="text" name="nome"  required="required" id="nome">
                    <label for="email">E-mail : </label>
                    <input type="email" name="email"  required="required" id="email">
                    <label for="cpf">cpf : </label>
                    <input type="text" name="cpf"  required="required" id="email">
                    <label for="senha">Senha : </label>
                    <input type="password" name="senha"  required="required" id="senha">
                    <label for="confSenha">Confirmar senha : </label>
                    <input type="password" name="confSenha" required="required" id="confSenha">

                    <input type="submit" value="Criar conta" class="form-button" style="background-color: #18569d;" name="criarConta">

                </form>
            </div>

            <hr style="width: 100%; margin-top: 2em; opacity: 0.75;">
            <div class="cadastro">
                <h3>Eu já tenho uma conta?</h3>
                <a href="login.php">Entrar</a>
            </div>
        </div>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>