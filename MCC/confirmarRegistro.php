<?php
    include("settings/header.php");

//     $idProd = $_COOKIE['idProd'];

//     echo"<h1>$idProd</h1>";
//     $selecao = mysqli_query($conexao , "SELECT * FROM produto WHERE idProd=$idProd");

    
//     if(mysqli_num_rows($selecao) > 0 ){
//         while($data = mysqli_fetch_assoc($selecao)){
//             $path = "$data[path]";
//             $titulo = "$data[tituloProd]";
//             $preco = "$data[precoProd]";
//             $quantidade = "$data[quantidadeProd]";
//             $categoria = "$data[categoria]";
//             $descricao = "$data[descricao]";
//             $usuarioProd = "$data[usuarioProd]";
//         }
//     }else{
//     echo"falha";
// }

    $path = $_COOKIE['path'];
    $titulo = $_COOKIE['tituloProd'];
    $preco = $_COOKIE['precoProd'];
    $quantidade = $_COOKIE['quantidadeProd'];
    $categoria = $_COOKIE['categoriaProd'];
    $descricao = $_COOKIE['descricaoProd'];
    // $usuarioProd = $_COOKIE['usuarioProd'];
    $usuarioProd = 'Loja Construções';
    $marca = $_COOKIE['marca'];

    if(isset($_POST['continuar'])){
                mysqli_query($conexao , "INSERT INTO produto (path, usuarioProd,tituloProd,precoProd,quantidadeProd,categoria,descricao,marca) VALUES ('$path','$usuarioProd','$titulo','$preco','$quantidade','$categoria','$descricao','$marca')" );
            echo "<p>Arquivo enviado com sucesso! </p>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCC - Produto</title>

    <link rel="shortcut icon" href="imgs/logo.png" type="image/x-icon">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pagInicial.css">
    <link rel="stylesheet" href="css/produto.css">

</head>
<body>
    

    <div class="container-prod">
        <div class="prod-img">
            <img src="<?php  echo"$path";  ?>" alt="lol">
        </div>

        <div class="prod-desc">
            <h1>
                <?php 
                    echo"$titulo";
                ?>
            </h1>

            <div class="prod-preco">
                <h3>Preço:  </h3>
                <h1>R$ <?php echo"$preco" ?></h1>
            </div>
            <hr style="margin-right: 500px;">

            <div class="prod-quantidade">
                Quantidade a comprar :
                <input type="text" value="1">
            </div>

            <div class="btn-add">
                <input type="button" name="" id="" value="Adicionar Ao Carrinho">
                <input type="button" name="" id="" value="Comprar Agora">
            </div>

            <div class="calcularFrete">
                <label for="frete">Calcular Frete</label>
                <form class="fretForm">
                    <input type="text" name="frete" id="frete" disabled>
                    <input type="submit" value="calcular">
                </form>
            </div>
            
            <hr>

            <table class="table-desc" >
                <tbody>
                    <tr>
                        <td>Publicado por : </td>
                        <td><?php echo"$usuarioProd"?></td>
                    </tr>
                    <tr>
                        <td>Marca : </td>
                        <td><?php echo"$marca"?></td>
                    </tr>
                </tbody>
            </table>

            <hr>

            <h5 style="margin-top: 10px;">Sobre este item</h5>
            <ul class="sobre-item">
                <?php 
                    echo"$descricao";
                ?>
            </ul>

            <form method="post">
                <a href="registrarProduto.php" style="color:red">Voltar</a>
                <input type="submit" name="continuar" value="continuar">
            </form>

        </div>
    </div>
    <hr>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js" integrity="sha512-h9kKZlwV1xrIcr2LwAPZhjlkx+x62mNwuQK5PAu9d3D+JXMNlGx8akZbqpXvp0vA54rz+DrqYVrzUGDMhwKmwQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js" integrity="sha512-fDGBclS3HUysEBIKooKWFDEWWORoA20n60OwY7OSYgxGEew9s7NgDaPkj7gqQcVXnASPvZAiFW8DiytstdlGtQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="script/script.js"></script>
</body>
</html>