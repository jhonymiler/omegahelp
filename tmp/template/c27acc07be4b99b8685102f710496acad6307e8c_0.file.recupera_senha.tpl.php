<?php
/* Smarty version 3.1.39, created on 2021-10-03 20:59:24
  from 'C:\xampp\htdocs\sistemas\omegahelp\views\painel\recupera_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615a43dca35a50_85965566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c27acc07be4b99b8685102f710496acad6307e8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sistemas\\omegahelp\\views\\painel\\recupera_senha.tpl',
      1 => 1633305425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615a43dca35a50_85965566 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h5 align="center">Recuperar Senha!</h5>

                    <form action="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
login/recuperar_senha/<?php if ((isset($_smarty_tpl->tpl_vars['token']->value))) {
echo $_smarty_tpl->tpl_vars['token']->value;
}?>"
                        id="recupera_senha" method="post">

                        <?php if ((isset($_smarty_tpl->tpl_vars['alterar_senha']->value))) {?>
                            <div class="input-group mb-3">
                                <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha"
                                    autocomplete="new-password" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                <span></span>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="confirma_senha" class="form-control"
                                    placeholder="Confirma Senha" autocomplete="new-password" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- /.col -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block float-right">Enviar</button>
                                </div>
                                <!-- /.col -->
                            </div>


                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['enviado']->value))) {?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fas fa-check"></i> Email enviado!</h5>
                                Uma mensagem foi enviada para seu email. Verifique sua caixa de entrada e leia as
                                instruções para recuperar sua senha.
                            </div><BR>
                            <a type="button" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
"
                                class="btn btn-primary btn-block float-right">Voltar</a>
                        <?php } else { ?>

                            <div class="input-group mb-3">
                                <input type="text" name="email" required class="form-control"
                                    placeholder="seuemail@site.com.br">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- /.col -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block float-right">Enviar</button>
                                </div>
                                <!-- /.col -->
                            </div>


                        <?php }?>
                    </form>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div><br>
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/img/aro-logo.png" alt="ARO HELPDESK"
                height="60" width="60">
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
dist/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/js/jquery.validation.pt-br.js"><?php echo '</script'; ?>
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

        <?php echo '<script'; ?>
>
            $(function() {
                $.validator.setDefaults({
                    submitHandler: function() {
                        $preloader = $('.preloader')

                        if ($preloader) {
                            $preloader.attr('style', 'height:100%');
                            $preloader.children().show();
                        }
                        return true;
                    },
                    onfocusout: function(e) {
                        this.element(e);
                    },
                    onkeyup: false,

                    highlight: function(element) {
                        jQuery(element).closest('.form-control').addClass('is-invalid');
                    },
                    unhighlight: function(element) {
                        jQuery(element).closest('.form-control').removeClass('is-invalid');
                        jQuery(element).closest('.form-control').addClass('is-valid');
                    },

                    errorElement: 'span',
                    errorClass: 'invalid-feedback',
                    errorPlacement: function(error, element) {
                        console.log(element.next());
                        if (element.next().length) {
                            $(element).next().siblings(".invalid-feedback").append(error);
                            error.insertAfter(element.next());
                        } else {
                            error.insertAfter(element);
                        }
                    },

                });

                $('#recupera_senha').validate({
                    rules: {
                        email: {
                            required: true,
                            email: true
                        },
                        senha: {
                            required: true,
                            minlength: 8,
                        },
                        confirma_senha: {
                            required: true,
                            minlength: 8,
                            equalTo: "#senha"
                        }
                    },
                    messages: {
                        email: {
                            required: "Por favor digite um email.",
                            email: "Este email é inválido"
                        },
                        senha: {
                            required: "Digite a nova senha",
                            maxlength: "No mínimo 8 caracteres"
                        },
                        confirma_senha: {
                            required: "Digite a confirmação da nova senha",
                            maxlength: "No mínimo 8 caracteres",
                            equalTo: "As não são iguais."
                        },
                    }
                });
            });
        <?php echo '</script'; ?>
>
    </body>

</html>
<?php }
}
