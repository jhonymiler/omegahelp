<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-03 23:38:29
=======
/* Smarty version 3.1.39, created on 2021-10-04 19:00:16
>>>>>>> master
  from 'C:\xampp\htdocs\sistemas\omegahelp\views\suporte\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_615a69254ff978_74988087',
=======
  'unifunc' => 'content_615b7970d712a1_48254289',
>>>>>>> master
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e511654e545175ba0d7b5f96169af5480ecdcfa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sistemas\\omegahelp\\views\\suporte\\index.tpl',
      1 => 1633204612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_615a69254ff978_74988087 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_615b7970d712a1_48254289 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master
?><html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['sessaoUsuario']->value['USU_nome'])===null||$tmp==='' ? "usuário" : $tmp);?>
 - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sem Titulo" : $tmp);?>
</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css"
            crossorigin="anonymous">

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/fontawesome-free/css/all.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
        <!-- Toastr -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/toastr/toastr.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/css/emojis.css">

        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/img/aro-logo.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/img/favicon-16x16.png">
        <link rel="manifest" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/img/site.webmanifest">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet"
            href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        <!-- ./wrapper -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/select2/css/select2.min.css">

        <link href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/css/jquery.dm-uploader.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/css/adminlte.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/ckeditor/examples/styles.css">

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/css/cropper.css">
        <link href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/inputfile/css/fileinput.css" media="all" rel="stylesheet"
            type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/lightbox/css/lightbox.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/custom-icon/icons-svg.css">

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/css/custom.css">

        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
        <!-- Bootstrap -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
        <!-- overlayScrollbars -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"><?php echo '</script'; ?>
>
        <!-- AdminLTE App -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/js/jquery.validation.pt-br.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/inputmask/jquery.inputmask.min.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/js/adminlte.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/js/autobahn.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/js/chatCliente.js"><?php echo '</script'; ?>
>
    </head>

    <body class="hold-transition layout-top-nav" style="position: relative;">
        <div class="wrapper">

            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__wobble" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/img/aro-logo.png" alt="ARO HELPDESK"
                    height="60" width="60">
            </div>


            <?php if (!empty($_smarty_tpl->tpl_vars['usuario']->value['USU_imagem'])) {?>
                <?php $_smarty_tpl->_assignInScope('imagem', ((string)$_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'])."upload/".((string)$_smarty_tpl->tpl_vars['usuario']->value['USU_imagem']));?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('imagem', ((string)$_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'])."dist/img/avatar.png");?>

            <?php }?>

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand-md navbar-light navbar-dark" style="padding: 0;">
                <div class="container brand-link">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
/usuarios" class="navbar-brand">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/img/aro-logo.png" alt="ARO HELPDESK" class="brand-image "
                            style="opacity: .8">
                        <span class="brand-text font-weight-light"> ARO HELPDESK</span>
                    </a>

                    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                        <!-- Left navbar links -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
suporte" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
suporte/perfil" class="nav-link">Meus dados</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
login/sair" class="nav-link">Sair</a>
                            </li>

                        </ul>


                    </div>

                    <!-- Right navbar links -->
                    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                        <!-- Notifications Dropdown Menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                                <i class="far fa-bell"></i>
                                <span class="badge badge-warning navbar-badge"><?php echo $_smarty_tpl->tpl_vars['abertos']->value['qtd'];?>
</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                <span class="dropdown-header">Notificações</span>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="fas fa-envelope mr-2"></i> <?php echo $_smarty_tpl->tpl_vars['abertos']->value['qtd'];?>
 Protocolos Abertos
                                    <span class="float-right text-muted text-sm">1 Dia</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i> <?php echo $_smarty_tpl->tpl_vars['aguardando']->value['qtd'];?>
 Aguardando resposta
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
                                <h1 class="m-0"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <?php $_smarty_tpl->_assignInScope('counter', count($_smarty_tpl->tpl_vars['navLinks']->value));?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navLinks']->value, 'link', false, NULL, 'i', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
?>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null) == $_smarty_tpl->tpl_vars['counter']->value) {?>
                                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['link']->value['nome'];?>
</li>
                                        <?php } else { ?>
                                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];
echo $_smarty_tpl->tpl_vars['link']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['nome'];?>
</a>
                                            </li>
                                        <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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


                            <?php if (is_array($_smarty_tpl->tpl_vars['_conteudo']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_conteudo']->value, 'conteudo');
$_smarty_tpl->tpl_vars['conteudo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conteudo']->value) {
$_smarty_tpl->tpl_vars['conteudo']->do_else = false;
?>
                                    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['conteudo']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['_pgParams']->value['REAL_PATH'])."modulos/suporte/views/home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php }?>


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

                                    <p>Em atendimento</p>
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
                                        src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
/views/painel/dist/img/aro-logo.png" alt="Suporte">
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
                                <input id="chat-mensagem" sala="suporte_<?php echo $_smarty_tpl->tpl_vars['usuario']->value['USU_id'];?>
" type="text"
                                    name="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['USU_nome'];?>
" placeholder="Digite a mensagem..." class="form-control"
                                    img="<?php echo $_smarty_tpl->tpl_vars['imagem']->value;?>
">
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
                <strong>Copyright &copy; 2021 <a href="https://arocontabilidade.com.br/" target="_blank">Grupo Aro
                        Contabilidade</a>.</strong>
                Direitos reservados.

            </footer>


        </div>
        <i id='chatbuttom' class="fas fa-comments bg-yellow "></i>

        <textarea id="campos" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['campos']->value;?>
</textarea>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/js/twemoji.min.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/js/DisMojiPicker.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
>
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

                <?php if (is_array($_smarty_tpl->tpl_vars['msg']->value)) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msg']->value, 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
                        $(document).Toasts('create', {
                            toast: true,
                            delay: 5000,
                            class: '<?php echo $_smarty_tpl->tpl_vars['m']->value['tipo'];?>
',
                            position: 'topRight',
                            autohide: true,
                            body: '<?php echo $_smarty_tpl->tpl_vars['m']->value['msg'];?>
'
                        });
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                $(".nav-link").removeClass('active');
                $("[data-link=<?php echo $_smarty_tpl->tpl_vars['current_link']->value;?>
]").addClass('active')
            });
            <?php if (!empty($_smarty_tpl->tpl_vars['campos']->value)) {?>
                $(document).ready(function() {
                    var campos = JSON.parse($("#campos").val());
                    preencher(campos);
                });

                function preencher(json) {
                    for (var key in json) {
                        $("[name=" + key + "]").val(json[key]);
                    }
                };
            <?php }?>
        <?php echo '</script'; ?>
>

    </body>

</html>
<?php }
}
