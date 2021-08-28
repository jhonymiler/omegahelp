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
        <link rel="stylesheet" href="{$_pgParams.path_layout}dist/css/emojis.css">

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
        <link rel="stylesheet" href="{$_pgParams.path_layout}dist/css/adminlte.css">
        <link rel="stylesheet" type="text/css" href="{$_pgParams.path_layout}plugins/ckeditor/examples/styles.css">

        <link rel="stylesheet" href="{$_pgParams.path_layout}dist/css/cropper.css">
        <link href="{$_pgParams.path_layout}plugins/inputfile/css/fileinput.css" media="all" rel="stylesheet"
            type="text/css" />
        <link rel="stylesheet" href="{$_pgParams.path_layout}plugins/lightbox/css/lightbox.css">
        <link rel="stylesheet" href="{$_pgParams.path_layout}dist/custom-icon/icons-svg.css">

        <link rel="stylesheet" href="{$_pgParams.path_layout}dist/css/custom.css">

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
            <nav class="main-header navbar navbar-expand-md navbar-light navbar-dark" style="padding: 0;">
                <div class="container brand-link">
                    <a href="{$_pgParams.RAIZ}/usuarios" class="navbar-brand">
                        <img src="{$_pgParams.path_layout}dist/img/aro-logo.png" alt="ARO HELPDESK" class="brand-image "
                            style="opacity: .8">
                        <span class="brand-text font-weight-light"> ARO HELPDESK</span>
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
                                <span class="badge badge-warning navbar-badge">{$abertos.qtd}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                <span class="dropdown-header">Notificações</span>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="fas fa-envelope mr-2"></i> {$abertos.qtd} Protocolos Abertos
                                    <span class="float-right text-muted text-sm">1 Dia</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i> {$aguardando.qtd} Aguardando resposta
                                    <span class="float-right text-muted text-sm">3 Min</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item dropdown-footer">Ver Todos Protocolos</a>
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



                                {if  !empty($usuario.USU_imagem)}
                                    {assign var="imagem" value="{$_pgParams.RAIZ}upload/{$usuario.USU_imagem}"}
                                {else}
                                    {assign var="imagem" value="{$_pgParams.path_layout}dist/img/avatar.png"}

                                {/if}

                                <div class="card card-widget widget-user shadow">
                                    <!-- Add the bg color to the header using any of the bg-* classes -->
                                    <div class="widget-user-header bg-info">
                                        <h3 class="widget-user-username">{$usuario.USU_nome}</h3>
                                        <h5 class="widget-user-desc">{$usuario.EMP_fantasia}</h5>

                                    </div>
                                    <div class="widget-user-image">
                                        <img class="img-circle elevation-2" src="{$imagem}" alt="User Avatar">
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-sm-4 border-right">
                                                <div class="description-block">
                                                    <h5 class="description-header"><span
                                                            class="badge bg-info">{$abertos.qtd}</span>
                                                    </h5>
                                                    <span style="font-size:12px;">Protocolos</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-4 border-right">
                                                <div class="description-block">
                                                    <h5 class="description-header"><span
                                                            class="badge bg-success">{$atendidos.qtd}</span></h5>
                                                    <span style="font-size:12px;">Atendidos</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-4">
                                                <div class="description-block">
                                                    <h5 class="description-header"><span
                                                            class="badge bg-danger">{$aguardando.qtd}</span></h5>
                                                    <span style="font-size:12px;">Aguardando</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <div class="card-footer p-0">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="{$_pgParams.RAIZ}suporte/" class="nav-link">
                                                    Página Inicial
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    Meu Perfil
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{$_pgParams.RAIZ}suporte/protocolos/novo" class="nav-link">
                                                    Novo Protocolo
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{$_pgParams.RAIZ}suporte/protocolos/" class="nav-link">
                                                    Meus Protocolos
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>




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
                <div id="slide-smile" class="card card-warning direct-chat direct-chat-warning dark-mode">
                    <div class="card-header">
                        <h3 class="card-title"><b>Chat</b></h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" title="Smiles" data-widget="chat-pane-toggle">
                                <i class="fas fa-smile"></i>
                            </button>
                            <button id="fechaChat" type="button" class="btn btn-tool">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <div id="ChatMensagens" class="direct-chat-messages">
                            <div id="qtdUsuarios" class="small-box bg-info   ">
                                <div class="inner">
                                    <h3>6 Usuários</h3>

                                    <p>Aguardando atendimento</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                            </div>
                            <div class="msg">
                                <div class="direct-chat-msg left">
                                    <div class="direct-chat-infos clearfix"><span
                                            class="direct-chat-name float-left">Suporte</span><span
                                            class="direct-chat-timestamp float-right">01/08/2021 19:37:47Hs</span></div>
                                    <img class="direct-chat-img"
                                        src="http://localhost/sistemas/omegahelp/views/painel/dist/img/aro-logo.png"
                                        alt="Suporte">
                                    <div class="direct-chat-text">Olá, breve irei lhe atender. Por favor aguarde um
                                        momento.</div>
                                </div>
                            </div>
                        </div>
                        <!--/.direct-chat-messages-->
                        <!-- Conversations are loaded here -->
                        <div class="direct-chat-contacts">
                            <div id="smiles"></div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <form id="enviaMsg" action="#" method="post">
                            <div class="input-group">
                                <input id="chat-mensagem" sala="suporte_{$usuario.USU_id}" type="text"
                                    name="{$usuario.USU_nome}" placeholder="Digite a mensagem..." class="form-control"
                                    img="{$imagem}">
                                <span class="input-group-append">
                                    <button type="button" class="btn btn-outline-warning" title="Smiles"
                                        data-widget="chat-pane-toggle">
                                        <i class="fas fa-smile"></i>
                                    </button>
                                </span>

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
        <script src="{$_pgParams.path_layout}dist/js/twemoji.min.js" crossorigin="anonymous"></script>
        <script src="{$_pgParams.path_layout}dist/js/DisMojiPicker.js"></script>

        <script>
            $("#smiles").disMojiPicker()

            $("#smiles").picker(emoji => $("#chat-mensagem").val($("#chat-mensagem").val() + emoji));
            twemoji.parse(document.body);


            var d = new Date();
            dataHora = (d.toLocaleString());
            $(".direct-chat-timestamp").html(dataHora);

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
                    {foreach key=status item=m from=$msg}
                        $(document).Toasts('create', {
                            toast: true,
                            delay: 5000,
                            class: '{$status}',
                            position: 'topRight',
                            autohide: true,
                            body: '{$m}'
                        });
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
