<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{$sessaoUsuario.USU_nome|default:"usuário"} - {$titulo|default:"Sem Titulo"}</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css"
            crossorigin="anonymous">

        <link rel="stylesheet" href="{$_pgParams.path_layout}plugins/fontawesome-free/css/all.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{$_pgParams.path_layout}plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{$_pgParams.path_layout}plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
        <!-- Toastr -->
        <link rel="stylesheet" href="{$_pgParams.path_layout}plugins/toastr/toastr.min.css">

        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="{$_pgParams.path_layout}dist/img/aro-logo.png">
        <link rel="icon" type="image/png" sizes="32x32" href="{$_pgParams.path_layout}dist/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="{$_pgParams.path_layout}dist/img/favicon-16x16.png">
        <link rel="manifest" href="{$_pgParams.path_layout}dist/img/site.webmanifest">
        <!-- DataTables -->
        <link rel="stylesheet" href="{$_pgParams.path_layout}plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet"
            href="{$_pgParams.path_layout}plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="{$_pgParams.path_layout}plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        <!-- ./wrapper -->
        <link rel="stylesheet" href="{$_pgParams.path_layout}plugins/select2/css/select2.min.css">

        <link href="{$_pgParams.path_layout}dist/css/jquery.dm-uploader.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{$_pgParams.path_layout}dist/css/adminlte.min.css">
        <link rel="stylesheet" href="{$_pgParams.path_layout}dist/css/custom.css">

        <link rel="stylesheet" href="{$_pgParams.path_layout}dist/css/cropper.css">
        <link href="{$_pgParams.path_layout}plugins/inputfile/css/fileinput.css" media="all" rel="stylesheet"
            type="text/css" />

        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="{$_pgParams.path_layout}plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="{$_pgParams.path_layout}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="{$_pgParams.path_layout}plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{$_pgParams.path_layout}dist/js/jquery.validate.min.js"></script>
        <script src="{$_pgParams.path_layout}dist/js/jquery.validation.pt-br.js"></script>
        <script src="{$_pgParams.path_layout}plugins/inputmask/jquery.inputmask.min.js"></script>

        <script src="{$_pgParams.path_layout}dist/js/adminlte.min.js"></script>
        <script src="{$_pgParams.path_layout}dist/js/autobahn.js"></script>
        <script src="{$_pgParams.path_layout}dist/js/chatCliente.js"></script>
    </head>

    <body class="hold-transition layout-top-nav" style="position: relative;">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand-md navbar-light navbar-dark">
                <div class="container">
                    <a href="{$_pgParams.RAIZ}/usuarios" class="navbar-brand">
                        <img src="{$_pgParams.path_layout}dist/img/aro-logo.png" alt="ARO HELPDESK" class="brand-image "
                            style="opacity: .8">
                        <span class="brand-text font-weight-light">ARO HELPDESK</span>
                    </a>

                    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                        <!-- Left navbar links -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{$_pgParams.RAIZ}/usuarios" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Meus dados</a>
                            </li>
                            <li class="nav-item">
                                <a href="{$_pgParams.RAIZ}/login/sair" class="nav-link">Sair</a>
                            </li>

                        </ul>


                    </div>

                    <!-- Right navbar links -->
                    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                        <!-- Notifications Dropdown Menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                                <i class="far fa-bell"></i>
                                <span class="badge badge-warning navbar-badge">15</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                <span class="dropdown-header">Notificações</span>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="fas fa-envelope mr-2"></i> 2 Chamados Abertos
                                    <span class="float-right text-muted text-sm">1 Dia</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i> 1 Aguardando resposta
                                    <span class="float-right text-muted text-sm">3 Min</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item dropdown-footer">Ver Todos Chamados</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
            <!-- /.navbar -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="height: auto;">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">{$titulo}</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    {assign var=counter value=count($navLinks)}
                                    {foreach from=$navLinks item="link" name=i}

                                        {if $smarty.foreach.i.iteration == $counter}
                                            <li class="breadcrumb-item active">{$link.nome}</li>
                                        {else}
                                            <li class="breadcrumb-item"><a href="{$_pgParams.RAIZ}{$link.url}">{$link.nome}</a>
                                            </li>
                                        {/if}
                                    {/foreach}
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">

                                <!-- Profile Image -->
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            {if  !empty($usuario.USU_imagem)}
                                                {assign var="imagem" value="{$_pgParams.RAIZ}upload/{$usuario.USU_imagem}"}
                                            {else}
                                                {assign var="imagem" value="{$_pgParams.path_layout}dist/img/avatar.png"}

                                            {/if}
                                            <img class="profile-user-img img-fluid img-circle" src="{$imagem}"
                                                alt="User profile picture">
                                        </div>

                                        <h3 class="profile-username text-center">{$usuario.USU_nome}</h3>

                                        <p class="text-muted text-center">{$usuario.EMP_fantasia}</p>

                                        <ul class="list-group list-group-unbordered mb-3">
                                            <li class="list-group-item">
                                                <b>Meus chamados</b> <a class="float-right">2</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Aguardando sua resposta</b> <a class="float-right">1</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Pendentes</b> <a class="float-right">1</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->

                            </div>

                            <div class="col-md-9">
                                {if is_array($_conteudo)}
                                    {foreach from=$_conteudo item=conteudo}
                                        {include file=$conteudo}
                                    {/foreach}
                                {else}
                                    {include file="{$_pgParams.RAIZ}modulos/suporte/views/index.tpl"}
                                {/if}


                            </div>
                        </div>


                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <div id="chatContainer" class="col-md-6 col-sm-6 col-lg-4">
                <!-- DIRECT CHAT WARNING -->
                <div class="card card-warning direct-chat direct-chat-warning dark-mode">
                    <div class="card-header">
                        <h3 class="card-title"><b>Chat</b></h3>

                        <div class="card-tools">

                            <button id="fechaChat" type="button" class="btn btn-tool" style="margin-top: 0px;">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- Conversations are loaded here -->
                        <div id="ChatMensagens" class="direct-chat-messages">
                            <!-- Message. Default to the left -->
                            <div class="msg">
                                <div class="direct-chat-msg left">
                                    <div class="direct-chat-infos clearfix">
                                        <span class="direct-chat-name float-left">Alexander Pierce</span>
                                        <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                    </div>
                                    <!-- /.direct-chat-infos -->
                                    <img class="direct-chat-img"
                                        src="{$_pgParams.path_layout}dist/img/user1-128x128.jpg"
                                        alt="Message User Image">
                                    <!-- /.direct-chat-img -->
                                    <div class="direct-chat-text">
                                        Is this template really for free? That's unbelievable!
                                    </div>
                                    <!-- /.direct-chat-text -->
                                </div>
                            </div>
                            <div class="msg">
                                <div class="direct-chat-msg right">
                                    <div class="direct-chat-infos clearfix">
                                        <span class="direct-chat-name float-right">Sarah Bullock</span>
                                        <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                    </div>
                                    <!-- /.direct-chat-infos -->
                                    <img class="direct-chat-img"
                                        src="{$_pgParams.path_layout}dist/img/user3-128x128.jpg"
                                        alt="Message User Image">
                                    <!-- /.direct-chat-img -->
                                    <div class="direct-chat-text">
                                        You better believe it!
                                    </div>
                                    <!-- /.direct-chat-text -->
                                </div>
                            </div>
                        </div>
                        <!--/.direct-chat-messages-->

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <form id="enviaMsg" action="#" method="post">
                            <div class="input-group">
                                <input id="chat-mensagem" sala="suporte_{$usuario.USU_id}" type="text"
                                    name="{$usuario.USU_nome}" placeholder="Digite a mensagem..." class="form-control"
                                    img="{$imagem}">
                                <span class="input-group-append">
                                    <button type="submit" class="btn btn-warning">
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!--/.direct-chat -->
            </div>
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 1.0.0
                </div>
                <strong>Copyright &copy; 2021 <a href="https://arocontabilidade.com.br/">Grupo Aro
                        Contabilidade</a>.</strong>
                Direitos reservados.

            </footer>


        </div>
        <i id='chatbuttom' class="fas fa-comments bg-yellow "></i>

        <textarea id="campos" style="display: none;">{$campos}</textarea>
        <script type="text/javascript">
            $("#chatContainer").hide();
            $("#chatbuttom").click(function() {
                $("#chatContainer").show(200);
                $("#chatbuttom").hide();
            });
            $("#fechaChat").click(function() {
                $("#chatbuttom").show();
                $("#chatContainer").hide(200);
            });


            $(document).ready(function() {

                $("#ChatMensagens").animate({
                    scrollTop: $("#ChatMensagens").prop("scrollHeight")
                }, 500);

                {if is_array($msg)}
                    {foreach item=mensagem from=$msg}
                        {foreach key=status item=m from=$mensagem}
                            $(document).Toasts('create', {
                                toast: true,
                                delay: 5000,
                                class: '{$status}',
                                position: 'topRight',
                                autohide: true,
                                body: '{$m}'
                            });
                        {/foreach}
                    {/foreach}
                {/if}
                $(".nav-link").removeClass('active');
                $("[data-link={$current_link}]").addClass('active')
            });
            {if !empty($campos)}
                $(document).ready(function() {
                    var campos = JSON.parse($("#campos").val());
                    preencher(campos);
                });

                function preencher(json) {
                    for (var key in json) {
                        $("[name=" + key + "]").val(json[key]);
                    }
                };
            {/if}
        </script>

    </body>

</html>
