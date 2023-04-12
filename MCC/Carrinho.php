
<?php
    include("settings/header.php");
    if ( session_status() !== PHP_SESSION_ACTIVE )
    {
       session_start();
   }

    if(isset($_GET['adicionar'])){
        //Adicionar ao carrinho
        $id = $_GET['adicionar'];
        $precoTotal = 0;
        $selecao = mysqli_query($conexao, "SELECT * FROM produto WHERE idProd = $id ");

            if (mysqli_num_rows($selecao) > 0) {
                while ($data = mysqli_fetch_assoc($selecao)) {
                    $idProd = $data['idProd'];
                    $tituloProd = $data['tituloProd'];
                    $path = $data['path'];
                    $usuarioProd = $data['usuarioProd'];
                    $precoProd = $data['precoProd'];
                    $categoria = $data['categoria'];
                    $descricao = $data['descricao'];
                    $marca = $data['marca'];
                }
            }

            if(isset($idProd)){
                if(isset($_SESSION['carrinho'][$idProd])){
                    $_SESSION['carrinho'][$idProd]['quantidade']++;
                }else{
                    $_SESSION['carrinho'][$idProd] = array('quantidade'=>1,'titulo'=>$tituloProd,'preco'=>$precoProd, 'id'=>$idProd,
                    'path'=>$path);
                }
            }else{
                die('Produto Não Existe');
            }

            header("location: Carrinho.php");
    }

    if(isset($_POST['excluir'])){
        $idExluir = $_POST["excluir"];
        if(isset($_SESSION['carrinho'][$idExluir])){
            unset($_SESSION['carrinho'][$idExluir]);
        }else{    
        }
    }

    if(isset($_POST['aumentarQuantidade'])){
        $idAumentar = $_POST['aumentarQuantidade'];
            if(isset($_SESSION['carrinho'][$idAumentar])){
                $_SESSION['carrinho'][$idAumentar]['quantidade']++;
            }else{    
            }
        }else if(isset($_POST['diminuirQuantidade'])){
        $idAumentar = $_POST['diminuirQuantidade'];
            if(isset($_SESSION['carrinho'][$idAumentar])){
                $_SESSION['carrinho'][$idAumentar]['quantidade']--;
            }else{    
            }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCC - Carrinho</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="shortcut icon" href="imgs/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/produto.css">
</head>
<body>
    
    



        <div style="display:flex;">
            <div class="compras">

        <?php


        if(isset(($_SESSION['carrinho']))){
        $tamanho = sizeof($_SESSION['carrinho']);

            foreach ($_SESSION['carrinho'] as $key => $value){
                include("settings/carrinho.php");
            }

            if($tamanho == 0 ){
                echo"<center><h1 style='margin-top:25px'>Carrinho Vazio</h1></center>";
            }
        }else{
            echo"<center><h1 style='margin-top:25px'>Carrinho Vazio</h1></center>";
        }
        
    ?>
        </div>

            <div class="resumo">
                <h4>Resumo</h4>
                <div>
                    <p>Subtotal</p>
                    <p>
                        <?php 
                        if(isset($precoTotal)){
                            echo"BRL $precoTotal";
                        }else{
                            echo"Não há produtos";
                        }
                        ?></p>
                </div>
                <div>
                    <p>Total do Pedido</p>
                    <p>
                        <?php 
                        if(isset($precoTotal)){
                            echo"BRL $precoTotal";
                        }else{
                            echo"Não há produtos";
                        }
                        ?>
                </p>
                </div>

                <div class="btn-add">
                    <input type="button" value="Avançar para o Checkout">
                </div>
            </div>
        </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>