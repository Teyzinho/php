<!DOCTYPE html>
<html lang="en">

<?php
    include("php/conexao.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="Style/loginRegistro.css">
</head>

<body>

        <?php
            if(isset($_POST["Login"])){
                $email = $_POST["email"];
                $senha = $_POST["senha"];
                $verificar = mysqli_query($conexao ,"SELECT * FROM usuario WHERE emailUsuario='$email' AND senhaUsuario='$senha'");

                if(mysqli_num_rows($verificar)<=0){
                    echo"senha ou e-mail errados";
                }else{
                    echo"logado";
                    setcookie("login",$email);
                    header("location: ./paginaInicial.php");
                }

            }else{
                echo"Insira Email e senha";
            }
        ?>


    <form class="form" method="post">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" name="email">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" name="senha">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                        Remember Me
                    </label>
                </div>
            </div>
        </div>

        <div style="display:flex; justify-content: space-between; width:100%;">
            <a class="btn btn-primary" href="registro.php" role="button">Registro</a>
            <input type="submit" class="btn btn-primary" value="Logar" name="Login">
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>