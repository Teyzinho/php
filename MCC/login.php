<?php
    include("settings/header.php");    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCC - Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/loginStyle.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
        <?php
            if(isset($_POST["Login"])){
                $email = $_POST["email"];
                $senha = $_POST["senha"];
                $verificar = mysqli_query($conexao ,"SELECT * FROM usuario WHERE email='$email' AND senha='$senha'");


            if (mysqli_num_rows($verificar) > 0) {
                while ($data = mysqli_fetch_assoc($verificar)) {
                    $usuario = $data['nome'];
                }
            }

                if(mysqli_num_rows($verificar)<=0){
                    echo"senha ou e-mail errados";
                }else{
                    echo"logado";
                    setcookie("login",$usuario);
                    header("location: ./pagInicial.php");
                }

            }else{
            }
        ?>


    <div class="log-content">

        <div class="log-titulo">
            <h1>Iniciar sessão</h1>
            <h3>Bem-vindo a MCC! Por favor, insira seus dados</h3>
        </div>

        <div class="login">

            <div class="log-btg">
                    <input type="button" value="Login com Google" name="log-btg">
                    <p>ou</p>
            </div>

            <div class="log-form">
                <form action="" method="post">
                    <label for="email">Email : </label>
                    <input type="email" name="email" required="required" id="email">
                    <label for="senha">Senha : </label>
                    <input type="password" name="senha" required="required" id="senha">
                    <input type="submit" value="Logar" name="Login" class="form-button" style="background-color: #18569d;">

                </form>
            </div>
            <hr style="width: 100%; margin-top: 2em; opacity: 0.75;">
            <div class="cadastro">
                <h3>Não tem uma conta ainda?</h3>
                <a href="cadastro.php">Cadastre-se</a>
            </div>
        </div>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>