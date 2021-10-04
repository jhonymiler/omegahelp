<?php
/* Smarty version 3.1.39, created on 2021-10-02 10:59:55
  from 'C:\xampp\htdocs\sistemas\omegahelp\views\painel\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615865db852718_10985988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '261a5e01eb44e2044ff599180fb38a915359c390' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sistemas\\omegahelp\\views\\painel\\index.tpl',
      1 => 1633182053,
      2 => 'file',
    ),
    '3f17f11a300bcda6cbed5b90b0c228892c09684d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sistemas\\omegahelp\\views\\painel\\sidebar.tpl',
      1 => 1633183077,
      2 => 'file',
    ),
    '1b59e637ab6984a95344a9e5a9b4575ed53817df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sistemas\\omegahelp\\modulos\\painel\\views\\protocolos.tpl',
      1 => 1631484599,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_615865db852718_10985988 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jonatas Miler - Painel Adminsitrativo</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="http://localhost/sistemas/omegahelp/views/painel/plugins/fontawesome-free/css/all.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="http://localhost/sistemas/omegahelp/views/painel/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="http://localhost/sistemas/omegahelp/views/painel/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
        <!-- Toastr -->
        <link rel="stylesheet" href="http://localhost/sistemas/omegahelp/views/painel/plugins/toastr/toastr.min.css">
        <link rel="stylesheet" href="http://localhost/sistemas/omegahelp/views/painel/dist/css/adminlte.css">

        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="http://localhost/sistemas/omegahelp/views/painel/dist/img/aro-logo.png">
        <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/sistemas/omegahelp/views/painel/dist/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/sistemas/omegahelp/views/painel/dist/img/favicon-16x16.png">
        <link rel="manifest" href="http://localhost/sistemas/omegahelp/views/painel/dist/img/site.webmanifest">
        <!-- DataTables -->
        <link rel="stylesheet" href="http://localhost/sistemas/omegahelp/views/painel/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet"
            href="http://localhost/sistemas/omegahelp/views/painel/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="http://localhost/sistemas/omegahelp/views/painel/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        <!-- ./wrapper -->
        <link href="http://localhost/sistemas/omegahelp/views/painel/dist/css/jquery.dm-uploader.min.css" rel="stylesheet">

        <link rel="stylesheet" href="http://localhost/sistemas/omegahelp/views/painel/dist/css/cropper.css">
        <link rel="stylesheet" href="http://localhost/sistemas/omegahelp/views/painel/dist/css/custom.css">

        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="http://localhost/sistemas/omegahelp/views/painel/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="http://localhost/sistemas/omegahelp/views/painel/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="http://localhost/sistemas/omegahelp/views/painel/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="http://localhost/sistemas/omegahelp/views/painel/dist/js/jquery.validate.min.js"></script>
        <script src="http://localhost/sistemas/omegahelp/views/painel/dist/js/jquery.validation.pt-br.js"></script>
        <script src="http://localhost/sistemas/omegahelp/views/painel/plugins/inputmask/jquery.inputmask.min.js"></script>

        <script src="http://localhost/sistemas/omegahelp/views/painel/dist/js/adminlte.min.js"></script>





    </head>

    <body class="sidebar-collapse control-sidebar-slide-open sidebar-mini-md">
        <div class="wrapper">

                            
            


            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__wobble" src="http://localhost/sistemas/omegahelp/views/painel/dist/img/aro-logo.png" alt="ARO HELPDESK"
                    height="60" width="60">
            </div>

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-dark">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="http://localhost/sistemas/omegahelp/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Configurações</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="http://localhost/sistemas/omegahelp/login/sair" class="nav-link">Sair</a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">

                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-comments"></i>
                            <span class="badge badge-danger navbar-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->

                                <div class="media">
                                    <img src="http://localhost/sistemas/omegahelp/views/painel/dist/img/user1-128x128.jpg" alt="User Avatar"
                                        class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Fulano
                                            <span class="float-right text-sm text-danger"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Dúvida Nota Fiscal</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Horas</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="http://localhost/sistemas/omegahelp/views/painel/dist/img/user8-128x128.jpg" alt="User Avatar"
                                        class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Ciclano
                                            <span class="float-right text-sm text-muted"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Não consigo fazer lançamento</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Horas</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="http://localhost/sistemas/omegahelp/views/painel/dist/img/user3-128x128.jpg" alt="User Avatar"
                                        class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Bertana
                                            <span class="float-right text-sm text-warning"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Olá, como faço para...</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Horas</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">Mostrar todas mensagens</a>
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">15 Notificações</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-ticket mr-2"></i> 4 Protocolos
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->


            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="http://localhost/sistemas/omegahelp/painel/" class="brand-link">
        <img src="http://localhost/sistemas/omegahelp/views/painel/dist/img/aro-logo.png" alt="ARO HELPDESK"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b>ARO HELPDES</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
                            
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="http://localhost/sistemas/omegahelp/upload/jonatas-miler_1630194557.png" class="img-circle elevation-2" alt="Jonatas Miler">
            </div>
            <div class="info">
                <a href="#" class="d-block"><b>Jonatas Miler</b></a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar nav-collapse-hide-child flex-column" data-widget="treeview"
                role="menu">
                <li class="nav-item menu-open">
                    <a href="http://localhost/sistemas/omegahelp/painel/" data-link="home" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Painel</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="http://localhost/sistemas/omegahelp/painel/empresas" data-link="empresas" class="nav-link">
                        <i class="nav-icon fas fa-user-tie "></i>
                        <p>Empresas</p>
                    </a>
                </li>
                <!--<li class="nav-item">
                    <a href="http://localhost/sistemas/omegahelp/painel/os" data-link="os" class="nav-link">
                        <i class="nav-icon fas fa-file-invoice-dollar"></i>
                        <p>Ordens de Serviço</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="http://localhost/sistemas/omegahelp/painel/protocolos" data-link="protocolos" class="nav-link">
                        <i class="nav-icon fas fa-ticket-alt"></i>
                        <p>
                            Protocolos
                        </p>
                    </a>
                </li> !-->
                <li class="nav-item">
                    <a href="http://localhost/sistemas/omegahelp/painel/departamentos" data-link="departamentos" class="nav-link">
                        <i class="nav-icon fas fa-map-signs"></i>
                        <p>
                            Departamentos
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="http://localhost/sistemas/omegahelp/painel/usuarios" data-link="usuarios" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Usuários
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="http://localhost/sistemas/omegahelp/painel/suporte" data-link="suporte" class="nav-link">
                        <i class="nav-icon fas fa-question-circle"></i>
                        <p>
                            Suporte Online
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Painel Adminsitrativo</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                                                        
                                                                                    <li class="breadcrumb-item"><a href="http://localhost/sistemas/omegahelp/painel">Home</a>
                                            </li>
                                                                            
                                                                                    <li class="breadcrumb-item active">Home</li>
                                                                                                            </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <!-- Conteudos da página -->

                                                                                            <!-- =========================================================== -->
        <!-- Small Box (Stat card) -->
        <div class="row">

            <div class="col-md-6 col-12">
                <h5 class="mb-2 mt-4">Small Box</h5>

                <div class="row">
                    <div class="col-md-6 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>10</h3>
                                <p>Abertos</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-ticket-alt"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-md-6 col-6">
                        <!-- small card -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>0</h3>

                                <p>Atendidos</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-md-6 col-6">
                        <!-- small card -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>10</h3>
                                <p>aguardando</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-md-6 col-6">
                        <!-- small card -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>10</h3>
                                <p>Pendentes</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-chart-pie"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body col-md-6 col-12">
                <p class="text-center">
                    <strong>Relatório do dia: 1 Jan, 2021 - 30 Jul, 2021</strong>
                </p>

                <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" height="250"></canvas>
                </div>
                <!-- /.chart-responsive -->
            </div>
        </div>
        <!-- ./col -->
        <div class="row">
            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">
                        <h3 class="card-title float-left">Lista de Chamdos</h3>
                        <!-- Check all button -->
                        <div class="btn-group float-right">
                            <a type="button" href="http://localhost/sistemas/omegahelp/suporte/protocolos/novo"
                                class="btn btn-block bg-gradient-success ">
                                <i class="fas fa-plus"></i>
                                Novo
                            </a>
                        </div>
                    </div>
                    <!-- ./card-header -->
                    <div class="card-body">
                        <table id="protocolos-lista" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Proprietário</th>
                                    <th>Assunto</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                                                                                            <tr>
                                            <td>33</td>
                                            <td>
                                                <b>Usuario da Silva</b><br>
                                                <span style="font-size: 11px;">ARO CONTABILIDADE</span>
                                            </td>
                                            <td>[Atualização] teste</td>
                                            <td>02/10/2021 09:10:19</td>
                                            <td><span class="badge bg-warning">Aguardando</span></td>
                                            <td>
                                                <a href="http://localhost/sistemas/omegahelp/painel/protocolos/ver/33"
                                                    class="btn btn-primary float-right">
                                                    <i class="fa fa-eye"></i> Ver
                                                </a>
                                            </td>
                                        </tr>

                                                                            <tr>
                                            <td>28</td>
                                            <td>
                                                <b>Jhon Snow</b><br>
                                                <span style="font-size: 11px;">Spacex</span>
                                            </td>
                                            <td>[Financeiro] Não está dando baixa nas parcelas</td>
                                            <td>12/09/2021 00:09:30</td>
                                            <td><span class="badge bg-warning">Aguardando</span></td>
                                            <td>
                                                <a href="http://localhost/sistemas/omegahelp/painel/protocolos/ver/28"
                                                    class="btn btn-primary float-right">
                                                    <i class="fa fa-eye"></i> Ver
                                                </a>
                                            </td>
                                        </tr>

                                                                            <tr>
                                            <td>27</td>
                                            <td>
                                                <b>Jhon Snow</b><br>
                                                <span style="font-size: 11px;">Spacex</span>
                                            </td>
                                            <td>[Faturamento] Comé que eu tiro nota?</td>
                                            <td>12/09/2021 00:09:34</td>
                                            <td><span class="badge bg-warning">Aguardando</span></td>
                                            <td>
                                                <a href="http://localhost/sistemas/omegahelp/painel/protocolos/ver/27"
                                                    class="btn btn-primary float-right">
                                                    <i class="fa fa-eye"></i> Ver
                                                </a>
                                            </td>
                                        </tr>

                                                                            <tr>
                                            <td>26</td>
                                            <td>
                                                <b>Usuario da Silva</b><br>
                                                <span style="font-size: 11px;">ARO CONTABILIDADE</span>
                                            </td>
                                            <td>[Faturamento] Não consigo tirar a nota</td>
                                            <td>28/08/2021 19:08:06</td>
                                            <td><span class="badge bg-warning">Aguardando</span></td>
                                            <td>
                                                <a href="http://localhost/sistemas/omegahelp/painel/protocolos/ver/26"
                                                    class="btn btn-primary float-right">
                                                    <i class="fa fa-eye"></i> Ver
                                                </a>
                                            </td>
                                        </tr>

                                                                            <tr>
                                            <td>25</td>
                                            <td>
                                                <b>Usuario da Silva</b><br>
                                                <span style="font-size: 11px;">ARO CONTABILIDADE</span>
                                            </td>
                                            <td>[CRM] Testando outro Ticket</td>
                                            <td>28/08/2021 18:08:42</td>
                                            <td><span class="badge bg-warning">Aguardando</span></td>
                                            <td>
                                                <a href="http://localhost/sistemas/omegahelp/painel/protocolos/ver/25"
                                                    class="btn btn-primary float-right">
                                                    <i class="fa fa-eye"></i> Ver
                                                </a>
                                            </td>
                                        </tr>

                                                                            <tr>
                                            <td>24</td>
                                            <td>
                                                <b>Usuario da Silva</b><br>
                                                <span style="font-size: 11px;">ARO CONTABILIDADE</span>
                                            </td>
                                            <td>[Cadastro Produto] Testando Protocolo</td>
                                            <td>28/08/2021 18:08:04</td>
                                            <td><span class="badge bg-warning">Aguardando</span></td>
                                            <td>
                                                <a href="http://localhost/sistemas/omegahelp/painel/protocolos/ver/24"
                                                    class="btn btn-primary float-right">
                                                    <i class="fa fa-eye"></i> Ver
                                                </a>
                                            </td>
                                        </tr>

                                                                    
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->






        <script src="http://localhost/sistemas/omegahelp/views/painel/plugins/datatables/jquery.dataTables.js"></script>
        <script src="http://localhost/sistemas/omegahelp/views/painel/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="http://localhost/sistemas/omegahelp/views/painel/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="http://localhost/sistemas/omegahelp/views/painel/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="http://localhost/sistemas/omegahelp/views/painel/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="http://localhost/sistemas/omegahelp/views/painel/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="http://localhost/sistemas/omegahelp/views/painel/plugins/jszip/jszip.min.js"></script>
        <script src="http://localhost/sistemas/omegahelp/views/painel/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="http://localhost/sistemas/omegahelp/views/painel/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="http://localhost/sistemas/omegahelp/views/painel/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="http://localhost/sistemas/omegahelp/views/painel/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="http://localhost/sistemas/omegahelp/views/painel/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- ChartJS -->
        <script src="http://localhost/sistemas/omegahelp/views/painel/plugins/chart.js/Chart.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="http://localhost/sistemas/omegahelp/views/painel/dist/js/dashboard.js"></script>


        <script>
            $(document).ready(function() {
                var table = $('#protocolos-lista').DataTable({
                    "language": pt_br,
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "paging": true,
                    "select": true,
                    "ordering": true,
                    "rowReorder": true,
                    "columnDefs": [{
                        orderable: true,
                        className: 'reorder',
                        targets: [0]
                    }, {
                        orderable: false,
                        targets: [-1],
                    }]
                });
                table.columns('.reorder').order('desc').draw();

            })
        </script>
                                                                            <!-- /.conteudos -->
                    </div>
                    <!--/. container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->


            <!-- Main Footer -->
            <footer class="main-footer">
                <strong>Copyright &copy; 2021 <a href="https://arocontabilidade.com.br/" target="_blank">Grupo Aro
                        Contabilidade</a>.</strong>
                Direitos reservados.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 1.0.0
                </div>
            </footer>
        </div>
        <textarea id="campos" style="display: none;"><br />
<b>Warning</b>:  Undefined array key "campos" in <b>C:\xampp\htdocs\sistemas\omegahelp\tmp\template\261a5e01eb44e2044ff599180fb38a915359c390_0.file.index.tpl.cache.php</b> on line <b>357</b><br />
<br />
<b>Warning</b>:  Attempt to read property "value" on null in <b>C:\xampp\htdocs\sistemas\omegahelp\tmp\template\261a5e01eb44e2044ff599180fb38a915359c390_0.file.index.tpl.cache.php</b> on line <b>357</b><br />
</textarea>
        <script type="text/javascript">
            $(document).ready(function() {
                                                                    $(".nav-link").removeClass('active');
                $("[data-link=home]").addClass('active')
            });
                    </script>

    </body>

</html>
<?php }
}
