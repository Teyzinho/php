<!DOCTYPE html>
<html lang="en">

<?php
include("settings/header.php");

// var_dump($_FILES);

if (isset($_FILES["imagem"])) {

    //Variáveis imagem
    echo "certo";
    $imagem = $_FILES["imagem"];

    if($imagem['error']){
        die("Falha ao enviar Arquivo");
    }

    $pasta = "bancoDeDados/";
    $nomeImagem = $imagem['name'];
    $novoNomedaImagem = uniqid();
    $extensao = strtolower(pathinfo($nomeImagem, PATHINFO_EXTENSION));

    if($extensao != "jpg" && $extensao != "png"){
        die("Tipo de arquivo não aceito");
    }

    $path = $pasta . $novoNomedaImagem . "." . $extensao;
    $deu_certo = move_uploaded_file($imagem["tmp_name"], $path);

    //********variáveis descrições do Produto*******
    
    $tituloProd = $_POST['titulo'];
    $precoProd = $_POST['preco'];
    $quantidadeProd = $_POST['quantidade'];
    $categoriaProd = $_POST['categoria'];
    $descricaoProd = $_POST['descricao'];
    $usuarioProd = $login_cookie;
    $marca = $_POST['marca'];
    

    if($deu_certo){
    //     mysqli_query($conexao , "INSERT INTO produto (path, usuarioProd,tituloProd,precoProd,quantidadeProd,categoria,descricao) VALUES ('$path','$usuarioProd','$tituloProd','$precoProd','$quantidadeProd','$categoriaProd','$descricaoProd')" );
    //     echo "<p>Arquivo enviado com sucesso! </p>";

    //     $idSelect = mysqli_query($conexao, "SELECT idProd FROM produto Where idProd=(select max(idProd) from produto)");

    //     if(mysqli_num_rows($idSelect) > 0 ){
    //         while($data = mysqli_fetch_assoc($idSelect)){
    //             echo"id = $data[idProd]";

    //             setcookie("idProd", $data['idProd']);
    //             header("location: ./confirmarRegistro.php");
    //         }
    //     }else{
    //     echo"falha";
    // }

    setcookie("path",$path);
    setcookie("tituloProd",$tituloProd);
    setcookie("precoProd",$precoProd);
    setcookie("quantidadeProd",$quantidadeProd);
    setcookie("categoriaProd",$categoriaProd);
    setcookie("descricaoProd",$descricaoProd);
    setcookie("usuarioProd",$usuarioProd);
    setcookie("marca",$marca);

    header("location: ./confirmarRegistro.php");
    
}
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Produtos</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/registroDeProdutos.css">
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
                    <img src="Imgs/imgExemplo.png" alt="Selecione Uma Imagem" id="imgPhoto">
                </div>
            </div>
        </div>
        <div class="prodInfo">
            <div class="mb-3">
                <label for="title" class="form-label">Titulo Do Produto :</label>
                <input type="text" name="titulo" class="form-control inputTitle" id="title" placeholder="Titulo">

                <div style="display: flex; margin-top: 20px;">
                    <label for="preco" class="form-label">Preço Do Produto R$: </label>
                    <input type="numeric" name="preco" class="form-control inputPreco" id="preco" placeholder="Preço">

                    <label for="quantidade" class="form-label" style="margin-left: 50px;">Quantidade : </label>
                    <input type="number" name="quantidade" class="form-control inputPreco" id="quantidade " placeholder="Qtd">
                </div>
            </div>
            
            <div>
                <label for="categoria"> Categoria : </label>
                <select name="categoria" id="categoria">
                    <option value="ferramenta">Ferramentas</option>
                    <option value="materialDeContrução">Material de Contrução</option>
                    <option value="pisosERevestimentos">Pisos e Revestimentos</option>
                    <option value="MetaiseAcessorios">Metais e Acessórios</option>
                </select>
            </div>

            <label for="marca" class="form-label" style="margin-top:20px;">Marca do produto:</label>
            <input type="text" name="marca" class="form-control" id="marca" placeholder="marca" >

            <div class="mb-3" style="margin-top:25px;">
                <label for="descricao" class="form-label">Descrição Produto</label>
                <textarea class="form-control" name="descricao" id="descricao" rows="10"></textarea>
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Enviar</button>
            </div>
        </div>



    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js" integrity="sha512-h9kKZlwV1xrIcr2LwAPZhjlkx+x62mNwuQK5PAu9d3D+JXMNlGx8akZbqpXvp0vA54rz+DrqYVrzUGDMhwKmwQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js" integrity="sha512-fDGBclS3HUysEBIKooKWFDEWWORoA20n60OwY7OSYgxGEew9s7NgDaPkj7gqQcVXnASPvZAiFW8DiytstdlGtQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="script/script.js"></script>
    <script src="script/registrarProduto.js"></script>
</body>

</html>