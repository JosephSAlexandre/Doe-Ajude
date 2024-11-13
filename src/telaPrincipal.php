<?php
session_start();
if (empty($_SESSION['email'])) {
   header("Location: index.php");
}
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title>Doe & Ajude</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <header>
            <!-- place navbar here -->
            <nav class="navbar bg-body-tertiary bg-success-subtle">
                <div class="container-fluid">
                <?= $_SESSION['email']; ?>
                    <!-- 
                        <a class="navbar-brand" href="paginaPrincipal.php">Doe&Ajude</a>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                        <div class="d-grid gap-5 d-md-flex justify-content-md-center">
                            <a class="btn btn-success rounded-pill" href="login.html" role="button">Entrar</a>
                            <a class="btn btn-success rounded-pill" href="cadastro.html" role="button">Cadastrar</a>
                        </div> 
                     -->

                    <!-- 
                     <form class="container-fluid">
                        <div class="input-group">
                            <a class="navbar-brand" href="paginaPrincipal.php">Doe&Ajude</a>
                            <form action="">
                                <input type="search" class="form-control rounded-pill" placeholder="Buscar" aria-label="Busca" aria-describedby="">
                                <button class="btn btn-outline-success rounded-pill" type="submit">Buscar</button>
                            </form>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <a class="btn btn-success rounded-pill" href="login.html" role="button">Entrar</a>
                                <a class="btn btn-success rounded-pill" href="cadastro.html" role="button">Cadastrar</a>
                            </div>
                        </div>
                      </form>
                     -->
                    
                     <form class="container-fluid">
                        <div class="input-group">
                            <a class="navbar-brand" href="telaPrincipal.php">Doe&Ajude</a>
                            <form action="">
                                <input type="search" class="form-control rounded-pill" placeholder="Buscar" aria-label="Busca" aria-describedby=""> 
                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                    <button class="btn btn-outline-success rounded-pill" type="submit">Buscar</button>
                                    <a class="btn btn-success rounded-pill" href="perfil.php" role="button">Menu</a>
                                    <a class="btn btn-success rounded-pill" href="logout.php" role="button">Sair</a>
                                </div>
                            </form>
                        </div>
                      </form>
  
                </div>
            </nav>
        </header>
        <main>
            <!--<h1>Exemplo de chamada ao PHP ao carregar a página</h1>
            <div id="resultado"></div>  <!-- Aqui será exibido o retorno do PHP -->
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="js/telaPrincipal.js"></script>
    </body>
</html>