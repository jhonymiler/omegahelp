<?php
/* Smarty version 3.1.39, created on 2021-09-26 11:29:17
  from 'C:\xampp\htdocs\sistemas\omegahelp\views\painel\recuperar-senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615083bda44853_98443153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e84c3e7c58de6d7dd6fa01652effadd21c451184' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sistemas\\omegahelp\\views\\painel\\recuperar-senha.tpl',
      1 => 1632666555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615083bda44853_98443153 (Smarty_Internal_Template $_smarty_tpl) {
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
dist/img/aro-logo.png" width="100" alt="ARO HELPDESK" />
            </div>
            <div class="login-logo">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
"><b>ARO</b> Sistema de HelpDesk</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <?php if ((isset($_smarty_tpl->tpl_vars['token']->value))) {?>
                        <p class="login-box-msg">Alteração de senha!</p>

                        <form action="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
login/alterar" method="post">



                            <div class="input-group mb-3">
                                <input type="text" name="senha" class="form-control" placeholder="Nova Senha">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="confirma" class="form-control" placeholder="Cofirme a Senha">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Alterar</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                    <?php } else { ?>
                        <p class="login-box-msg">Um link será enviado para seu email!
                            Acesse seu email, clique no link para ser direcionado para a página de alteração de senha.</p>

                        <form action="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
login/enviar" method="post">
                            <div class="input-group mb-3">
                                <input type="text" name="email" class="form-control" placeholder="Digite seu e-mail">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                    <?php }?>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
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

        <?php if (!empty($_smarty_tpl->tpl_vars['_error']->value)) {?>
            <?php echo '<script'; ?>
>
                var msg = '<?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
';      
                
                    $(function() {
                        $(document).Toasts('create', {
                            toast: true,
                            delay: 5000,
                            class: 'bg-danger',
                            position: 'topRight',
                            autohide: true,
                            title: 'Erro!',
                            body: msg
                        });
                    });
                
            <?php echo '</script'; ?>
>
        <?php }?>
    </body>

</html>
<?php }
}
