<!doctype html>
<html lang="pt-br">
    <head>
        <title>Cadastro</title>
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
                    <a class="navbar-brand" href="#">Doe&Ajude</a>
                </div>
            </nav>
        </header>
        <main>
        
            <div class="container text-left vstack gap-5 p-5">
                <div class="row g-3  grid gap-5">
                    <div class="col-6 bg-success text-white align-self-start">
                        <div class="" style="height: 800px;"></div>
                    </div>



                    <div class="col bg-success-subtle rounded-3">
                        <div class="mb-3 text-center">
                            <h2>Cadastro</h2>
                        </div>
                        <form action="" class="">
                            <div class="mb-3">
                                <label for="" class="form-label">Usuário</label>
                                <input type="text" class="form-control rounded-pill" id="usuarioCadastro" placeholder="Usuário" required>    
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control rounded-pill" id="nomeCompletoCadastro" placeholder="Nome Completo" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">CPF</label>
                                <input type="text" class="form-control rounded-pill" id="cpfCadastro" placeholder="000.000.000-00" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control rounded-pill" id="emailCadastro" placeholder="name@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Endereço</label>
                                <input type="text" class="form-control rounded-pill" id="enderecoCadastro" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Telefone</label>
                                <input type="text" class="form-control rounded-pill" id="telefoneCadastro" placeholder="00900000000">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Senha</label>
                                <input type="password" id="senhaCadastro" class="form-control rounded-pill" aria-describedby="blocoAjudaSenha" required>
                                    <div id="blocoAjudaSenha" class="form-text">
                                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                                </div>
                            </div>
                            <div class="mb-3 d-grid gap-5 d-md-flex justify-content-md-center">
                                <a class="btn btn-success rounded-pill" href="login.php" role="button">Já Tenho Cadastro</a>
                                <button class="btn btn-success rounded-pill" type="submit">Cadastrar</button>
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
