<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location:login.php');
}
?>
<?php
include 'conexao.php';
$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM servico WHERE id='$id'";
    $res = mysqli_query($conexao, $sql);
}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Clothes Repair | Cadastro de Serviço</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" class="rounded-circle" src="img/perfil.jpg" height="48px" width="48px" />
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">Adryanne Kelly</span>
                                <span class="text-muted text-xs block">Secretária <b class="caret"></b></span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                                <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="validalogout.php">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            CR+
                        </div>
                    </li>
                    <li>
                        <a href="pagsecretaria.php"><i class="glyphicon glyphicon-home"></i> <span class="nav-label">Home</span></a>
                    </li>
                    <li>
                        <a href="agendarconserto.php"><i class="glyphicon glyphicon-calendar"></i> <span class="nav-label">Agendar Conserto</span></a>
                    </li>
                    <li>
                        <a href="cadclientesecre.php"><i class="glyphicon glyphicon-plus"></i> <span class="nav-label">Cadastro de Cliente</span></a>
                    </li>
                    <li>
                        <a href="cadservsecre.php"><i class="glyphicon glyphicon-briefcase"></i> <span class="nav-label">Cadastro de Serviço</span></a>
                    </li>
                    <li>
                        <a href="consulservsecre.php"><i class="glyphicon glyphicon-eye-open"></i> <span class="nav-label">Consulta de Serviços</span> </a>
                    </li>
                    <li>
                        <a href="consulclientesecre.php"><i class="glyphicon glyphicon-eye-open"></i> <span class="nav-label">Consulta de Clientes</span> </a>
                    </li>
                    <li>
                        <a href="relatoriossecre.php"><i class="glyphicon glyphicon-stats"></i> <span class="nav-label">Relatório de Conserto</span></a>
                    </li>
                    <li class="active">
                        <a href="altservsecre.php"><i class="glyphicon glyphicon-stats"></i> <span class="nav-label">Alteração de Serviço</span></a>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" action="search_results.html">
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Bem Vindo(a) à Clothes Repair.</span>
                        </li>
                        <li>
                            <a href="validalogout.php">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-12">
                    <h2>Alterar Serviço</h2>
                </div>
            </div>
            <div class="ibox-content">
                <?php
                $sql = "SELECT * FROM `servico` WHERE id = $id LIMIT 1";
                $res = mysqli_query($conexao, $sql);
                while ($resultado = mysqli_fetch_assoc($res)) {
                ?>
                    <form method="post" action="validaaltserv.php?id=<?php echo $resultado['id'] ?>">
                        <div class="form-group  row"><label class="col-sm-1 col-form-label">ID</label>

                            <div class="col-sm-2"><input type="text" class="form-control" disabled="" value="<?php echo $resultado['id'] ?>" name="id"></div>
                        </div>
                        <div class="form-group  row"><label class="col-sm-1 col-form-label">Nome </label>

                            <div class="col-sm-10"><input type="text" class="form-control" value="<?php echo $resultado['nome'] ?>" name="nome"></div>
                        </div>
                        <div class="form-group row"><label class="col-sm-1 col-form-label">Preço</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-md-4"><input type="text" class="form-control" placeholder="R$" value="<?php echo $resultado['preco'] ?>" name="preco"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <input type="submit" name="" class="btn btn-block btn-primary compose-mail col-md-10" value="Alterar">
                        </div>
                    <?php
                }
                    ?>
                    </form>
            </div>
            <div class="footer">
                <div>
                    <strong>Copyright</strong> Clothes Repair &copy; 2019
                </div>
            </div>

        </div>
    </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Flot demo data -->
    <script src="js/demo/flot-demo.js"></script>

</body>

</html>