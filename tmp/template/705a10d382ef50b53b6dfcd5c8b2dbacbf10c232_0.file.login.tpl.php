<?php
/* Smarty version 3.1.39, created on 2021-10-04 18:45:51
  from 'C:\xampp\htdocs\sistemas\omegahelp\views\painel\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615b760f100c55_10807536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '705a10d382ef50b53b6dfcd5c8b2dbacbf10c232' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sistemas\\omegahelp\\views\\painel\\login.tpl',
      1 => 1633320510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615b760f100c55_10807536 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/fontawesome-free/css/all.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/img/aro-logo.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/img/favicon-16x16.png">
        <link rel="manifest" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/img/site.webmanifest">

        <!-- Toastr -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/toastr/toastr.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/css/adminlte.min.css">
    </head>

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <img src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/img/aro-acx.png" width="250" alt="GRUPO ARO" />
            </div>
            <div class="login-logo">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
" style="font-size: 26px;"><img
                        src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/img/grupo-aro.png" width="100" alt="GRUPO ARO" /> | Sistema de
                    HelpDesk</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Entre com seu usuário e senha!</p>

                    <form action="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
login/acesso" method="post">
                        <div class="input-group mb-3">
                            <input type="text" name="email" class="form-control" placeholder="seuemail@site.com.br">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="senha" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
login/recuperar_senha">Esqueci minha senha!</a>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div><br>


        <!-- /.login-box -->

        <!-- jQuery -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
        <!-- Bootstrap 4 -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/sweetalert2/sweetalert2.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/toastr/toastr.min.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/js/adminlte.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/js/app.js"><?php echo '</script'; ?>
>

        <?php if (is_array($_smarty_tpl->tpl_vars['msg']->value)) {?>
            <?php echo '<script'; ?>
 type="text/javascript">
                $(document).ready(function() {

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
                });
            <?php echo '</script'; ?>
>

        <?php }?>
    </body>

</html>
<?php }
}
