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
                    <p class="login-box-msg">Entre com seu usuário e senha!</p>

                    <form action="{$_pgParams.RAIZ}login/acesso" method="post">
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
                                    <a href="forgot-password.html">Esqueci minha senha!</a>
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
        <script src="{$_pgParams.path_layout}plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="{$_pgParams.path_layout}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="{$_pgParams.path_layout}plugins/sweetalert2/sweetalert2.min.js"></script>
        <script src="{$_pgParams.path_layout}plugins/toastr/toastr.min.js"></script>

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
    </body>

</html>
