<?php
include("conexao.php");
if (isset($_POST["deslogar"])) {
    setcookie('login');
    header("location: ./pagInicial.php");
}
if (isset($_COOKIE['login'])){
    $login_cookie = $_COOKIE['login'];
}

if(isset($_GET['search'])){
    header("location: ./pesquisa.php?pesquisa=$_GET[search]");
}

?>
<body>
    <header>
        <div class="header">
            <a href="pagInicial.php" class="logo">
                <img src="imgs/logo.png" alt="logo">
            </a>
            <form class="search">
                <form method='post'>
                    <input type="search" name="search" id="" placeholder="Pesquisar">
                </form>
            </form>
            <?php
            if(!isset($login_cookie)){
                echo"
                <div class='cadastro-perfil'>
                    <a aria-label='entrar' href='cadastro.php'>
                        Cadastra-se
                    </a>
                    <div>
                    <a aria-label='entrar' href='login.php'>
                        <i class='bi bi-person'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='currentColor' class='bi bi-person' viewBox='0 0 16 16'>
                                <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z'/>
                            </svg>
                        </i>
                        Entrar
                    </a>
                </div>
                </div>
            ";
                }else{
                    echo "<div class='cadastro-perfil'><div style=\"color:white\">
                    $login_cookie
                    <i class='bi bi-person'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='currentColor' class='bi bi-person' viewBox='0 0 16 16'>
                        <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z'/>
                    </svg>
                </i></div>";
                    echo"
                <form method='post'>
                    <input type='submit' value='Deslogar' name='deslogar' class='deslogarbtn'>
                </form>
                <a href='registrarProduto.php'>Registrar Produto</a>
                </div>
            ";
                }
                ?>
            <div class="carrinho">
                <a href="Carrinho.php">
                    <div>
                        <i class="bi bi-cart">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        </i>
                    </div>
                </a>
            </div>
        </div>
        <div class="filtros">
                <a href="pesquisa.php?categoria=ferramenta">
                    <span>Ferramentas</span>
                </a>
                <a href="pesquisa.php?categoria=materialDeContrucao">
                    <span>Material de Construção</span>
                </a>
                <a href="pesquisa.php?categoria=pisosERevestimentos">
                    <span>Pisos e Revestimento</span>
                </a>
                <a href="pesquisa.php?categoria=MetaiseAcessorios">
                    <span>Metais e Acessórios</span>
                </a>
            </div>
    </header>
</body>
</html>