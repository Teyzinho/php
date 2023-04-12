<?php
include("settings/header.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MCC -Página Inicial</title>
  <link rel="shortcut icon" href="imgs/logo.png" type="image/x-icon">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/pagInicial.css">


</head>

<body>


  <div class="banner">

    <div id="bannerSlide" class="carousel slide bannerSlide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imgs/img-full-banner.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imgs/banner.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imgs/vanner.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#bannerSlide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#bannerSlide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </div>

  <div class="anuncios-container">
    <div class="banner1">
      <a href="pesquisa.php?categoria=pisosERevestimentos">
        <img src="imgs/fornecedores-pisos-e-revestimentos-01.jpg" alt="">
        <div class="AnuncioTitulo">
            <h2>Pisos e Revestimentos</h2>
          </div>
      </a>
    </div>

    <div>
    <a href="pesquisa.php?categoria=ferramenta">
      <div class="banner2">
            <img src="imgs/banner_FERRAMENTAS_M-min.jpg" alt="">
      </div>
      </a>

      <div class="banner3">
        <a href="pesquisa.php?categoria=materialDeContrucao">
          <img src="imgs/materias.png" alt="">
          <div class="AnuncioTitulo">
            <h2>Materias de Contrução</h2>
          </div>
          </a>
      </div>
    </div>
  </div>

  <h3 style="padding-left: 25px;">Materiais de construção</h3>
  <div class="slider-container">

    <div class="slider js-slider">

      <?php

      $selecao = mysqli_query($conexao, "SELECT * FROM produto WHERE categoria = 'materialDeContrução' ");

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

  <h3 style="padding-left: 25px;">Ferramentas</h3>
  <div class="slider-container">

    <div class="slider js-slider">

      <?php
      $selecao = mysqli_query($conexao, "SELECT * FROM produto WHERE categoria = 'ferramenta' ");

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

<h3 style="padding-left: 25px;">Pisos e Revestimento</h3>
  <div class="slider-container">

    <div class="slider js-slider">

      <?php
      $selecao = mysqli_query($conexao, "SELECT * FROM produto WHERE categoria = 'pisosERevestimentos' ");

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

  <h3 style="padding-left: 25px;">Metais e Acessórios</h3>
  <div class="slider-container">

    <div class="slider js-slider">

      <?php
      $selecao = mysqli_query($conexao, "SELECT * FROM produto WHERE categoria = 'MetaiseAcessorios' ");

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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js" integrity="sha512-h9kKZlwV1xrIcr2LwAPZhjlkx+x62mNwuQK5PAu9d3D+JXMNlGx8akZbqpXvp0vA54rz+DrqYVrzUGDMhwKmwQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js" integrity="sha512-fDGBclS3HUysEBIKooKWFDEWWORoA20n60OwY7OSYgxGEew9s7NgDaPkj7gqQcVXnASPvZAiFW8DiytstdlGtQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="script/script.js"></script>
</body>

</html>