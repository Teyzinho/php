<?php
include("settings/header.php");

$id = $_GET['id'];

$selecao = mysqli_query($conexao, "SELECT * FROM produto WHERE idProd = $id ");

if (mysqli_num_rows($selecao) > 0) {
    while ($data = mysqli_fetch_assoc($selecao)) {
        $tituloProd = $data['tituloProd'];
        $path = $data['path'];
        $usuarioProd = $data['usuarioProd'];
        $precoProd = $data['precoProd'];
        $categoria = $data['categoria'];
        $descricao = $data['descricao'];
        $marca = $data['marca'];
    }
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
            <img src="<?php echo "$path";  ?>" alt="lol">
        </div>

        <div class="prod-desc">
            <h1>
                <?php
                echo "$tituloProd";
                ?>
            </h1>

            <div class="prod-preco">
                <h3>Preço: </h3>
                <h1>R$ <?php echo "$precoProd" ?></h1>
            </div>
            <hr style="margin-right: 500px;">

            <div class="prod-quantidade">
                Quantidade a comprar :
                <input type="text" value="1">
            </div>

            <div class="btn-add">
                <input type="button" name="" id="" value="Adicionar Ao Carrinho">
                <a href="Carrinho.php?adicionar=<?php echo"$id" ?>">
                    <input type="button" name="" id="" value="Comprar Agora">
                </a>
            </div>

            <div class="calcularFrete">
                <label for="frete">Calcular Frete</label>
                <form class="fretForm">
                    <input type="text" name="frete" id="frete" disabled>
                    <input type="submit" value="calcular" disabled>
                </form>
            </div>

            <hr>

            <table class="table-desc">
                <tbody>
                    <tr>
                        <td>Publicado por : </td>
                        <td><?php echo "$usuarioProd" ?></td>
                    </tr>
                    <tr>
                        <td>Marca : </td>
                        <td><?php echo "$marca" ?></td>
                    </tr>
                </tbody>
            </table>

            <hr>

            <h5 style="margin-top: 10px;">Sobre este item</h5>
            <ul class="sobre-item">
                <?php
                echo "$descricao";
                ?>
            </ul>


        </div>
    </div>
    <hr>
    <h3 style="padding-left: 25px;">Produtos Relacionados</h3>

    <div class="slider-container">

        <div class="slider js-slider">

            <?php
            $selecao = mysqli_query($conexao, "SELECT * FROM produto WHERE categoria = '$categoria' ");

            if (mysqli_num_rows($selecao) > 0) {
                while ($data = mysqli_fetch_assoc($selecao)) {
                    echo "
                    <a class='linkProd' href='produto.php?id=$data[idProd]'>
                    <div class='card-prod'>
                        <div class='img-anuncio'>
                            <img src='$data[path]' alt='#'>
                        </div>
                    
                        <p class='descricao-anuncio'>
                            $data[tituloProd]
                        </p>
                        <div class='rating'>
                              <div style='display:flex;'>
                                <div class='star'>
                                    &#9734;
                                    &#9734;
                                    &#9734;
                                    &#9734;
                                    &#9734;
                            </div>
                                <p>(0)</p>
                </div>
                
            </div>
                        <div class='preco-anuncio'>
                            R$ $data[precoProd]
                        </div>
                </div>
                </a>
        ";
                }
            } else {
                echo "Não há produtos";
            }
            ?>

        </div>
    </div>

    <hr>

    <div class="avaliacoes">
        <div class="rating">
            <h4>Avaliações de clientes</h4>
            <div>
                <div class="star">
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9734;
                </div>
                <p>4,5 de 5</p>
            </div>

        </div>

        <div class="review-container">
            <div class="review">
                <div class="review-header">
                    <img src="imgs/user-logo.png" alt="">
                    <span>Mauricio de souza</span>
                </div>

                <div class="review-rating">
                    <div class="star">
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                    </div>

                    <h5>Ótimo Produto</h5>
                </div>

                <span class="review-data">
                    Avaliado em 30 de setembro de 2022
                </span>

                <div class="review-text">
                    Ótimo produto, rende bastante, recomendo.
                </div>

                <form method="post" class="avaliar-review">
                    <button type="button" class="btn btn-primary">útil</button>
                    <button type="button" class="btn btn-secondary">Informar Abuso</button>
                </form>
            </div>

            <div class="review">
                <div class="review-header">
                    <img src="imgs/user-logo.png" alt="">
                    <span>Pedro</span>
                </div>

                <div class="review-rating">
                    <div class="star">
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                    </div>

                    <h5>Gostei</h5>
                </div>

                <span class="review-data">
                    Avaliado em 28 de setembro de 2022
                </span>

                <div class="review-text">
                    Muito bom.
                </div>

                <form method="post" class="avaliar-review">
                    <button type="button" class="btn btn-primary">útil</button>
                    <button type="button" class="btn btn-secondary">Informar Abuso</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js" integrity="sha512-h9kKZlwV1xrIcr2LwAPZhjlkx+x62mNwuQK5PAu9d3D+JXMNlGx8akZbqpXvp0vA54rz+DrqYVrzUGDMhwKmwQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js" integrity="sha512-fDGBclS3HUysEBIKooKWFDEWWORoA20n60OwY7OSYgxGEew9s7NgDaPkj7gqQcVXnASPvZAiFW8DiytstdlGtQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="script/script.js"></script>
</body>

</html>