<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cadastro</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Cadastre sua Empresa</h3></div>
                                    <div class="card-body">
                                        <form action="validacad.php" method="POST">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Nome</label>
                                                    <input class="form-control py-4" name="campo_nome" required type="text" placeholder="Insira seu primeiro nome" />
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control py-4" name="campo_email" required type="email" aria-describedby="emailHelp" placeholder="Ex:email@gmail.com" />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label>Senha</label>
                                                        <input class="form-control py-4" type="password" name="campo_senha" required type="Senha" placeholder="Insira sua senha" />
                                                </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label>Confirme sua senha</label>
                                                        <input class="form-control py-4" type="password" name="confirma_senha" required type="password" placeholder="Confirme sua senha" />
                                                </div>
                                                </div>
                                            </div>
                                            <button name="cadastrar" class="btn btn-primary" type="submit"> Cadastrar-se
                                        </button>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Já tem um cadastro? Faça seu login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
