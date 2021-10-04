<?php
/* Smarty version 3.1.39, created on 2021-09-27 20:50:33
  from 'C:\xampp\htdocs\sistemas\omegahelp\modulos\painel\views\config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615258c950a314_01403610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c646a7c21ac8a7d5afe5d5433c83be928f1295c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sistemas\\omegahelp\\modulos\\painel\\views\\config.tpl',
      1 => 1632786631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615258c950a314_01403610 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-12 col-md-12">
        <div class="card card-primary card-tabs">
            <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="Email-tab" data-toggle="pill" href="#Email" role="tab"
                            aria-controls="Email" aria-selected="true">Email</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="mensagens-email-tab" data-toggle="pill" href="#mensagens-email"
                            role="tab" aria-controls="mensagens-email" aria-selected="false">Modelo de Mensgens de
                            Email</a>
                    </li>

                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                    <div class="tab-pane fade show active" id="Email" role="tabpanel" aria-labelledby="Email-tab">
                        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/config/email" id="config-email">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="CON_email">E-Mail</label>
                                            <input name="CON_id" type="hidden">

                                            <input name="CON_email" type="email" class="form-control" id="CON_email"
                                                placeholder="email@site.com.br">
                                        </div>
                                        <div class="form-group">
                                            <label for="CON_user">Usuario</label>
                                            <input name="CON_user" type="text" class="form-control" id="CON_user">
                                        </div>
                                        <div class="form-group">
                                            <label for="CON_pass">Senha</label>
                                            <input name="CON_pass" type="password" class="form-control" id="CON_pass"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="CON_host">Host</label>
                                                    <input name="CON_host" type="text" class="form-control"
                                                        id="CON_host">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Autenticação</label>
                                                    <div class="clearfix">
                                                        <div class="custom-control custom-radio float-left"
                                                            style="margin-right: 20px;">
                                                            <input class="custom-control-input" type="radio"
                                                                id="CON_auth_sim" name="CON_auth" value="1" checked>
                                                            <label for="CON_auth_sim"
                                                                class="custom-control-label">Sim</label>
                                                        </div>
                                                        <div class="custom-control custom-radio float-left">
                                                            <input class="custom-control-input" type="radio"
                                                                id="CON_auth_nao" name="CON_auth" value="0">
                                                            <label for="CON_auth_nao"
                                                                class="custom-control-label">Não</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="CON_secure">Segurança</label>
                                                    <input name="CON_secure" type="text" class="form-control"
                                                        id="CON_secure" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="CON_port">Porta SMTP</label>
                                                    <input name="CON_port" type="text" class="form-control"
                                                        id="CON_port" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer" style="margin-top: 10px;">
                                            <button type="submit" class="btn btn-primary float-right">Gravar</button>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                        </form>
                    </div>
                    <div class="tab-pane fade" id="mensagens-email" role="tabpanel"
                        aria-labelledby="mensagens-email-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <form id="modelos" action="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
config/modelos" method="post">

                                    <div class="form-group">
                                        <input name="MOD_id" type="hidden">
                                        <label for="MOD_titulo">Titulo do Modelo</label>

                                        <input name="MOD_titulo" type="text" class="form-control" id="MOD_titulo">
                                    </div>
                                    <div class="form-group">
                                        <textarea rows="10" id="MOD_texto" class="form-control"
                                            name="MOD_texto"></textarea>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary float-right">Enviar</button>
                                    </div>

                                </form>
                            </div>
                            <div class="col-md-6">
                                <h6><b>Lista de Modelos</b></h6>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Titulo</th>
                                            <th>Data</th>
                                            <th style="text-align: center;"><button type="button"
                                                    class="btn btn-sm btn-success" title="Adicionar"><i
                                                        class="fas fa-plus"></i></button></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-widget="expandable-table" aria-expanded="false">
                                            <td>02</td>
                                            <td>Modelo para alterar senha</td>
                                            <td>26/09/2021 18:56:00hs</td>
                                            <td align="center">
                                                <button type="button" class="btn btn-sm btn-primary" title="Editar"><i
                                                        class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-sm btn-danger" title="Excluir"><i
                                                        class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr class="expandable-body">
                                            <td colspan="5">
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                    Lorem Ipsum has been the industry's standard dummy text ever since
                                                    the
                                                    1500s, when an unknown printer took a galley of type and scrambled
                                                    it to
                                                    make a type specimen book. It has survived not only five centuries,
                                                    but
                                                    also
                                                    the leap into electronic typesetting, remaining essentially
                                                    unchanged.
                                                    It
                                                    was popularised in the 1960s with the release of Letraset sheets
                                                    containing
                                                    Lorem Ipsum passages, and more recently with desktop publishing
                                                    software
                                                    like Aldus PageMaker including versions of Lorem Ipsum.
                                                </p>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>

    </div>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/ckeditor/build/ckeditor.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(document).ready(function() {
            $('input[name="CON_auth"]').click(function() {
                if ($(this).val() == 0) {
                    $("#CON_secure").prop('disabled', true);
                    $("#CON_secure").prop('required', false);
                } else {
                    $("#CON_secure").prop('disabled', false);
                    $("#CON_secure").prop('required', true);

                }
            });


        });

        $(window).on('load', function() {
            $("#Email-tab").addClass('active');
        });


        ClassicEditor
            .create(document.querySelector('#MOD_texto'), {

                toolbar: {
                    items: [
                        'undo',
                        'redo',
                        '|',
                        'heading',
                        'fontBackgroundColor',
                        'fontColor',
                        'fontFamily',
                        'fontSize',
                        'underline',
                        'bold',
                        'italic',
                        'removeFormat',
                        '|',
                        'bulletedList',
                        'numberedList',
                        'todoList',
                        'horizontalLine',
                        'outdent',
                        'indent',
                        'link',
                        '|',
                        'findAndReplace',
                        'code',
                        'sourceEditing',
                        '|',
                        'imageUpload',
                        'blockQuote',
                        'insertTable',
                        'mediaEmbed',

                    ],
                    shouldNotGroupWhenFull: true
                },
                language: 'pt-br',
                image: {
                    toolbar: [
                        'imageTextAlternative',
                        'imageStyle:inline',
                        'imageStyle:block',
                        'imageStyle:side'
                    ]
                },
                table: {
                    contentToolbar: [
                        'tableColumn',
                        'tableRow',
                        'mergeTableCells',
                        'tableCellProperties',
                        'tableProperties'
                    ]
                },
                licenseKey: '',



            })
            .then(editor => {
                window.editor = editor;




            })
            .catch(error => {
                console.error('Oops, something went wrong!');
                console.error(
                    'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:'
                );
                console.warn('Build id: 57ad2wky0177-p3feweray3ug');
                console.error(error);
            });



        function validacao() {
            var valid = true;
            var msg = '';


            if (editor.getData() == '') {
                valid = false;

                $(".ck-editor").attr('style', 'border:1px solid red;');
            } else {
                $(".ck-editor").removeAttr('style');
            }

            if (valid == false) {
                $(document).Toasts('create', {
                    toast: true,
                    delay: 5000,
                    class: 'bg-danger',
                    position: 'topRight',
                    autohide: true,
                    fade: true,
                    title: 'Erro!',
                    body: 'Os campos em vermelho são obrigatórios. Por favor preencha-os.'
                });
            }

            return valid;


        }
    <?php echo '</script'; ?>
>
<?php }
}
