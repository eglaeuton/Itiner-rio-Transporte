<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tabela de transportes</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Menu</a>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <a href='login.php' 
            <button class="btn btn-primary" type="button">Fazer Login </button>
            </a>
            <br>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php"
                                ><div class="sb-nav-link-icon "><i class="fas fa-columns"></i></div>
                                Voltar Menu
                            </a>
                            
                            
                            
                            
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                        >Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login.html">Login</a><a class="nav-link" href="register.php">Register</a><a class="nav-link" href="password.html">Forgot Password</a></nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                                        >Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.html">401 Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="500.html">500 Page</a></nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts</a
                            ><a class="nav-link" href="tables.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Transportes</a
                            >
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Transportes</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Rotas</a></li>
                            <li class="breadcrumb-item active">Tabelas</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">Esta página serve para que o passageiro tenha em mãos a lista de transportes públicos. 
                        </div>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Transporte: Ônibus<br>São Gonçalo/ Fortaleza</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                
                                                <th>Saída</th>
                                                <th>Chegada prevista</th>
                                                <th>Preço</th>
                                                <th>Empresa</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <td>05:30</td>
                                                <td>07:00</td>
                                                <td>R$ 8,00</td>
                                                <td>Fretcar</td>
                                               
                                            </tr>
                                            <tr>
                                                
                                                <td>06:30</td>
                                                <td>08:00</td>
                                                <td>R$ 8,00</td>
                                                <td>Fretcar</td>
                                               
                                            </tr>
                                            <tr>
                                                
                                                <td>06:30</td>
                                                <td>08:00</td>
                                                <td>R$ 8,45</td>
                                                <td>Fretcar</td>
                                                
                                            </tr>
                                            <tr>
                                                
                                                <td>06:50</td>
                                                <td>07:50</td>
                                                <td>R$ 8,45</td>
                                                <td>Fretcar</td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Transporte: Topic
                            <br>Fortaleza/Paracuru via São Gonçalo<br></div></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Dia</th>
                                                <th>Saída</th>
                                                <th>Chegada prevista</th>
                                                <th>Preço</th>
                                                <th>Empresa</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                             <tr>
                                                <td>Domingo </td>
                                                <td>06:00</td>
                                                <td>15:00</td>
                                                <td>R$ 15,00</td>
                                                <td>Coottrece</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Segunda-feira</td>
                                                <td>06:00</td>
                                                <td>15:00</td>
                                                <td>R$ 15,00</td>
                                                <td>Coottrece</td>
                                               
                                            </tr>
                                            <tr>
                                              <td>Terça-feira</td>
                                                <td>06:00</td>
                                                <td>15:00</td>
                                                <td>R$ 15,00</td>
                                                <td>Coottrece</td>
                                               
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <br>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">

                            <div class="text-muted align-center">Copyright &copy; Your Website 2019</div>
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
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
