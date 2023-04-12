<!DOCTYPE html>
<html lang="en">

<?php
    include("php/conexao.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="Style/loginRegistro.css">
</head>
<body>

    <?php
        $select = "SELECT nomeUsuario, emailUsuario, senhaUsuario FROM `usuario`";
        $result = mysqli_query($conexao, $select);

        if(isset($_POST["nomeUsuario"]) && isset($_POST["email"]) && isset($_POST["senha"]) && isset($_POST["confirmarSenha"])){
            echo"certo";
            $nomeUsuario = $_POST["nomeUsuario"];
            $emailusuario = $_POST["email"];
            $senhausuario = $_POST["senha"];

            $insert = "INSERT INTO usuario (nomeUsuario,emailUsuario,senhaUsuario) VALUES('$nomeUsuario','$emailusuario','$senhausuario')";


            if(mysqli_query($conexao,$insert)){
                echo"Realizado com sucesso";
            }else{
                echo("Falha ao inserir registro:" .$insert ."<br>" . mysqli_error($conexao));
            }

        }else{
            echo"erro";
        }

    ?>


    <form class="form" method="post">
    <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nome Usuario</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" name="email">
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="senha" name="senha">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Confirmar Senha</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="confirmarSenha" name="confirmarSenha">
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
            <a class="btn btn-primary" href="registro.php" role="button">Ir para login</a>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script> 
    
</body>
</html>