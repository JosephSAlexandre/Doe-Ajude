<!doctype html>
<html lang="pt-br">
    <head>
        <title>Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="/src/css/style.css">
        <link rel="stylesheet" href="/src/scss/_utilities.scss">
    </head>

    <body>
        <header>
            <!-- place navbar here -->
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="paginaPrincipal.php">Doe&Ajude</a>
                </div>
            </nav>
        </header>
        <main>
            <div class="container vstack gap-5 p-5"> 
                <div class="row p-5">
                    <div class="col-4 p-3 mb-2 offset-md-4 bg-success-subtle rounded-3">
                        <h2 class="mb-3 text-center">Login</h2>
                        <form action="" class="">
                            <div class="mb-3">
                                <label for="" class="form-label">Usuário</label>
                                <input type="text" class="form-control rounded-pill" id="usuario" placeholder="Digite o usuário" required>    
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Senha</label>
                                <input type="password" id="senha" class="form-control rounded-pill" placeholder="Digite a senha" required>
                            </div>
                            <div class="d-grid gap-5 d-md-flex justify-content-md-center">
                                <button class="btn btn-success rounded-pill" type="submit">Entrar</button>
                                <a class="btn btn-success rounded-pill" href="cadastro.php" role="button">Realizar Cadastro</a>
                            </div>                         
                        </form>
                    </div>    
                </div>    
            </div>
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
    </body>
</html>