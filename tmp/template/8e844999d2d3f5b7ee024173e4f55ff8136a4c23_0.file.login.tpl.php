<?php
/* Smarty version 3.1.39, created on 2021-09-23 08:53:04
  from 'C:\xampp\htdocs\views\painel\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614c6aa002ecf1_85146072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e844999d2d3f5b7ee024173e4f55ff8136a4c23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\views\\painel\\login.tpl',
      1 => 1632397967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614c6aa002ecf1_85146072 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Asix</title>

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
dist/img/aro-logo.png" width="100" alt="ASIX" />
            </div>
            <div class="login-logo">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
"><b>ARO ERP</b> </a>
            </div>
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Entre com seu usuário e senha!</p>

                    <form action="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
login/acesso" method="post">
                        <div class="input-group mb-3">
                            <input type="text" name="user" class="form-control" placeholder="Usuário">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="pass" class="form-control" placeholder="Senha">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <select name="banco" class="form-control" placeholder="Base">
                                <option value="banco">Escolha uma Base</option>

                                <?php if ((is_array($_smarty_tpl->tpl_vars['infs']->value) && count($_smarty_tpl->tpl_vars['infs']->value) > 0)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infs']->value, 'inf', false, 'i');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['inf']->value['inf'];?>
</option>';
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                                    <?php }?>
                                </select>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-database"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

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
