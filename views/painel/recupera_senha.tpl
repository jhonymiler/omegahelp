<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{$titulo}</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{$_pgParams.path_layout}plugins/fontawesome-free/css/all.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="{$_pgParams.path_layout}plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="{$_pgParams.path_layout}dist/img/aro-logo.png">
        <link rel="icon" type="image/png" sizes="32x32" href="{$_pgParams.path_layout}dist/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="{$_pgParams.path_layout}dist/img/favicon-16x16.png">
        <link rel="manifest" href="{$_pgParams.path_layout}dist/img/site.webmanifest">

        <!-- Toastr -->
        <link rel="stylesheet" href="{$_pgParams.path_layout}plugins/toastr/toastr.min.css">
        <link rel="stylesheet" href="{$_pgParams.path_layout}dist/css/adminlte.min.css">
    </head>

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <img src="{$_pgParams.path_layout}dist/img/aro-acx.png" width="250" alt="GRUPO ARO" />
            </div>
            <div class="login-logo">
                <a href="{$_pgParams.RAIZ}" style="font-size: 26px;"><img
                        src="{$_pgParams.path_layout}dist/img/grupo-aro.png" width="100" alt="GRUPO ARO" /> | Sistema de
                    HelpDesk</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <h5 align="center">Recuperar Senha!</h5>

                    <form action="{$_pgParams.RAIZ}login/recuperar_senha" id="recupera_senha" method="post">

                        {if isset($alterar_senha)}
                            <div class="input-group mb-3">
                                <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha"
                                    autocomplete="new-password" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
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


                        {else if isset($enviado)}
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fas fa-check"></i> Email enviado!</h5>
                                Uma mensagem foi enviada para seu email. Verifique sua caixa de entrada e leia as
                                instruções para recuperar sua senha.
                            </div>

                        {else}

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


                        {/if}
                    </form>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div><br>


        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="{$_pgParams.path_layout}plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="{$_pgParams.path_layout}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="{$_pgParams.path_layout}plugins/sweetalert2/sweetalert2.min.js"></script>
        <script src="{$_pgParams.path_layout}plugins/toastr/toastr.min.js"></script>
        <script src="{$_pgParams.path_layout}dist/js/jquery.validate.min.js"></script>
        <script src="{$_pgParams.path_layout}dist/js/jquery.validation.pt-br.js"></script>

        <script src="{$_pgParams.path_layout}dist/js/adminlte.min.js"></script>
        <script src="{$_pgParams.path_layout}dist/js/app.js"></script>

        {if !empty($_error)}
            <script>
                var msg = '{$_error}';      
                {literal}
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
                {/literal}
            </script>
        {/if}

        <script>
            $(document).ready(function() {
                $('#recupera_senha').submit(function() {
                    $(this).validate({
                        rules: {
                            senha: {
                                required: true,
                                minlength: 8
                            },
                            confirma_senha: {
                                required: true,
                                minlength: 8,
                                equalTo: "#senha"
                            },
                            email: {
                                required: true
                            }
                        }
                    });
                });

            });
        </script>
    </body>

</html>
