<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Clothes Repair | Home Secretária</title>

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
                        <img alt="image" class="rounded-circle" src="img/perfil.jpg" height="48px" width="48px"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">Adryanne Kelly</span>
                            <span class="text-muted text-xs block">Secretária <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="profile.html">Perfil</a></li>
                            <li><a class="dropdown-item" href="contacts.html">Contatos</a></li>
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
                    <a href="consulservsecre.php"><i class="glyphicon glyphicon-eye-open"></i> <span class="nav-label">Consulta de Serviços</span>  </a>
                </li>
                <li class="active">
                    <a href="consulclientesecre.php"><i class="glyphicon glyphicon-eye-open"></i> <span class="nav-label">Consulta de Clientes</span>  </a>
                </li>
                <li>
                    <a href="relatoriossecre.php"><i class="glyphicon glyphicon-stats"></i> <span class="nav-label">Relatório de Conserto</span></a>
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
                <div class="col-lg-10">
                    <h2>Consulta de Clientes</h2>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Clientes</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#" class="dropdown-item">Config option 1</a>
                                </li>
                                <li><a href="#" class="dropdown-item">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                    <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="html5buttons"><div class="dt-buttons btn-group"><a class="btn btn-default buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#"><span>Copy</span></a><a class="btn btn-default buttons-csv buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#"><span>CSV</span></a><a class="btn btn-default buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#"><span>Excel</span></a><a class="btn btn-default buttons-pdf buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#"><span>PDF</span></a><a class="btn btn-default buttons-print" tabindex="0" aria-controls="DataTables_Table_0" href="#"><span>Print</span></a></div></div><div class="dataTables_length" id="DataTables_Table_0_length"><label>Mostrar <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Procurar:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite"></div><table class="table table-striped table-bordered table-hover dataTables-example dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" role="grid">
                    <thead>
                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="0" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 100px;">ID</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 150px;">Nome</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 150px;">Telefone</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 150px;">CPF</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 150px;">Email</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 150px;">Alterar</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 150px;">Excluir</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    include 'conexao.php';

                    $sql = "SELECT * FROM cliente ORDER BY id ASC";
                    
                    $result = mysqli_query($conexao, $sql);
                    foreach ($result as $linha) {
                        $id = $linha['id'];
                     ?>
                      <tr class="gradeX">
                        <td><?php echo $linha['id']; ?></td>
                        <td><?php echo $linha['nome']; ?> </td>
                        <td><?php echo $linha['telefone']; ?></td>
                        <td><?php echo $linha['cpf']; ?></td>
                        <td><?php echo $linha['email']; ?></td>
                        <td><a href="altclientesecre.php?id=<?php echo $linha['id']; ?>" class="btn btn-info">Alterar</a></td>
                        <td><a href="id=<?php echo $linha['id']; ?>" class="btn btn-info" data-toggle="modal" data-target="#modalExemplo<?php echo $linha['id']; ?>">Excluir</a></td>
                      
                    </tr>
                    </tbody>
                    <div class="modal fade" id="modalExemplo<?php echo $linha['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Exclusão</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Deseja mesmo excluir o cliente <?php echo $linha['nome']; ?> ?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <a href="validaexclcliente.php?id=<?php echo $linha['id']; ?>"><button type="button" class="btn btn-primary">Excluir</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                    <tfoot>
                    <tr><th rowspan="1" colspan="1">ID</th><th rowspan="1" colspan="1">Nome</th><th rowspan="1" colspan="1">Telefone</th><th rowspan="1" colspan="1">CPF</th><th rowspan="1" colspan="1">Email</th>
                        <th rowspan="1" colspan="1">Alterar</th>
                        <th rowspan="1" colspan="1">Excluir</th>
                    </tr>
                    </tfoot>
                    </table><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">Próximo</a></li></ul></div></div>
                        </div>

                    </div>
                </div>
            </div>
            </div>
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
