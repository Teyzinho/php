<!DOCTYPE html>
<html lang="en">

    <?php
        include("php/header.php");

        var_dump($_FILES);
        
        if(isset($_FILES["imagem"])){
            echo"arquivo enviado";
        }
    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Produtos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="Style/loginRegistro.css">
    <link rel="stylesheet" href="Style/registroDeProdutos.css">
</head>

<body>

    <form action="" enctype="multipart/form-data" method="post" class="prodForm">

        <div class="prodImg">
            <div class="mb-3">
                <label for="fileImg" class="form-label">Imagem :</label>
                <input class="form-control" type="file" id="fileImg" name="imagem">
            </div>
            <div clas="imgShow">
                <div class="imageContainer">
                    <img src="Img/imgExemplo.png" alt="Selecione Uma Imagem" id="imgPhoto">
                </div>
            </div>
        </div>
            <div class="prodInfo">
                <div class="mb-3">
                    <label for="title" class="form-label">Titulo Do Produto :</label>
                    <input type="email" class="form-control inputTitle" id="title" placeholder="Titulo">
                    
                    <div style="display: flex; margin-top: 20px;">
                        <label for="preco" class="form-label">Preço Do Produto R$: </label>
                        <input type="number" class="form-control inputPreco" id="preco" placeholder="Preço">

                        <label for="quantidade" class="form-label" style="margin-left: 50px;">Quantidade : </label>
                        <input type="number" class="form-control inputPreco" id="quantidade " placeholder="Qtd">
                    </div>

                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição Produto</label>
                    <textarea class="form-control" id="descricao" rows="10"></textarea>
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Enviar</button>
                </div>
            </div>

            

    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>

    <script src="js/registrarProduto.js"></script>
</body>

</html>