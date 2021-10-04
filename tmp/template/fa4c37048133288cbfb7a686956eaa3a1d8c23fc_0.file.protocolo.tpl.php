<?php
/* Smarty version 3.1.39, created on 2021-10-04 01:04:15
  from 'C:\xampp\htdocs\sistemas\omegahelp\modulos\painel\views\protocolo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615a7d3f5c8f37_80929665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa4c37048133288cbfb7a686956eaa3a1d8c23fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sistemas\\omegahelp\\modulos\\painel\\views\\protocolo.tpl',
      1 => 1633320253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615a7d3f5c8f37_80929665 (Smarty_Internal_Template $_smarty_tpl) {
if (is_array($_smarty_tpl->tpl_vars['protocolo']->value)) {?>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-tabs">

                <nav class="navbar navbar-expand navbar-primary navbar-dark">
                    <div class="user-block">
                        <h5><?php echo $_smarty_tpl->tpl_vars['protocolo']->value['EMP_fantasia'];?>
 (<?php echo $_smarty_tpl->tpl_vars['protocolo']->value['USU_nome'];?>
)</h5>
                    </div>
                    <!-- Right navbar links -->
                    <ul class="nav navbar-nav ml-auto" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item ">
                            <a class="nav-link active" title="Ver Chamado" id="chamado-tab" data-toggle="pill"
                                href="#chamado" role="tab" aria-controls="chamado" aria-selected="true">
                                <i class="far fa-eye"></i>
                                <i class="fas fa-pray"></i>
                                <!--<i class="fas fa-bullhorn"></i>-->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="historico-chat-tab" title="Histórico do Chat" data-toggle="pill"
                                href="#historico-chat" role="tab" aria-controls="historico-chat" aria-selected="false"><i
                                    class="fas fa-comments"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="responder-tab" title="Responder Chamado" data-toggle="pill"
                                href="#responder" role="tab" aria-controls="responder" aria-selected="false"><i
                                    class="fas fa-reply"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" title="Atribuir chamado para especialista" data-toggle="modal"
                                data-target="#modal_atribuir"><i class="fas fa-share"><i
                                        class="fas fa-user-plus"></i></i></a>
                        </li>

                    </ul>
                    <div class="card-tools float-right">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" style="color:#FFF">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" style="color:#FFF">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </nav>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                        <div class="tab-pane fade show active" id="chamado" role="tabpanel" aria-labelledby="chamado-tab">
                            <div class="clearfix">
                                <h5 class="float-left"><b><?php echo $_smarty_tpl->tpl_vars['protocolo']->value['PRO_assunto'];?>
</b></h5>
                                <span class="badge bg-<?php echo $_smarty_tpl->tpl_vars['protocolo']->value['STA_corHtml'];?>
  float-right"
                                    style="font-size: 1em;"><?php echo $_smarty_tpl->tpl_vars['protocolo']->value['STA_status'];?>
</span>
                            </div>
                            <div class="clearfix">
                                <h6 class="float-left">Depto: <b><?php echo $_smarty_tpl->tpl_vars['protocolo']->value['TIP_tipo'];?>
</b></h6>
                                <span class="mailbox-read-time float-right"><b>Criado em: </b><?php echo $_smarty_tpl->tpl_vars['protocolo']->value['PRO_aberto'];?>
</span>
                            </div>
                            <div class="card-body">

                                <?php echo $_smarty_tpl->tpl_vars['protocolo']->value['PRO_texto'];?>


                                <div><span class="float-right text-muted"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['respostaQtd']->value)===null||$tmp==='' ? "0" : $tmp);?>
 Respostas</span></div>

                            </div>
                            <!-- /.card-header -->
                            <?php if ((isset($_smarty_tpl->tpl_vars['anexos']->value)) && is_array($_smarty_tpl->tpl_vars['anexos']->value)) {?>

                                <div class="card-body">
                                    <ul class="mailbox-attachments d-flex align-items-stretch clearfix row">

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['anexos']->value, 'arq');
$_smarty_tpl->tpl_vars['arq']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['arq']->value) {
$_smarty_tpl->tpl_vars['arq']->do_else = false;
?>
                                            <li class="col-md-2 clearfix">
                                                <?php if ((isset($_smarty_tpl->tpl_vars['arq']->value['icone']))) {?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
upload/<?php echo $_smarty_tpl->tpl_vars['arq']->value['ANE_arquivo'];?>
"
                                                        class="btn btn-default btn-block" target="_blank">
                                                        <span class="mailbox-attachment-icon"><i class="far <?php echo $_smarty_tpl->tpl_vars['arq']->value['icone'];?>
"></i></span>
                                                    </a>
                                                <?php } elseif ((isset($_smarty_tpl->tpl_vars['arq']->value['imagem']))) {?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
upload/<?php echo $_smarty_tpl->tpl_vars['arq']->value['ANE_arquivo'];?>
" data-lightbox="roadtrip"
                                                        class="btn btn-default btn-block"><img
                                                            src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
upload/<?php echo $_smarty_tpl->tpl_vars['arq']->value['ANE_arquivo'];?>
" width="100%"></a>
                                                <?php }?>
                                            </li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            <?php }?>
                            <!-- /.card-body -->
                            <!-- .Respostas -->
                            <div class="card-footer card-comments">
                                <?php if ((isset($_smarty_tpl->tpl_vars['respostas']->value)) && is_array($_smarty_tpl->tpl_vars['respostas']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['respostas']->value, 'res');
$_smarty_tpl->tpl_vars['res']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['res']->value) {
$_smarty_tpl->tpl_vars['res']->do_else = false;
?>
                                        <div class="card-comment">
                                            <!-- User image -->
                                            <img class="img-circle img-sm" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
upload/<?php echo $_smarty_tpl->tpl_vars['res']->value['USU_imagem'];?>
"
                                                alt="<?php echo $_smarty_tpl->tpl_vars['res']->value['USU_nome'];?>
">

                                            <div class="comment-text">
                                                <span class="username">
                                                    <span class="text-muted float-right"><?php echo $_smarty_tpl->tpl_vars['res']->value['RES_data'];?>
</span>
                                                </span><!-- /.username -->
                                                <?php echo $_smarty_tpl->tpl_vars['res']->value['RES_texto'];?>

                                                <?php if ((isset($_smarty_tpl->tpl_vars['res']->value['anexos'])) && is_array($_smarty_tpl->tpl_vars['res']->value['anexos'])) {?>

                                                    <!-- /.card-header -->
                                                    <div class="card-body">
                                                        <ul class="mailbox-attachments row">

                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value['anexos'], 'aneRes');
$_smarty_tpl->tpl_vars['aneRes']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aneRes']->value) {
$_smarty_tpl->tpl_vars['aneRes']->do_else = false;
?>
                                                                <li class="col-md-2">
                                                                    <?php if ((isset($_smarty_tpl->tpl_vars['aneRes']->value['icone']))) {?>
                                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
upload/<?php echo $_smarty_tpl->tpl_vars['aneRes']->value['ANE_arquivo'];?>
"
                                                                            class="btn btn-default btn-block" target="_blank">
                                                                            <span class="mailbox-attachment-icon"><i
                                                                                    class="far <?php echo $_smarty_tpl->tpl_vars['aneRes']->value['icone'];?>
"></i></span>
                                                                        </a>
                                                                    <?php } elseif ((isset($_smarty_tpl->tpl_vars['aneRes']->value['imagem']))) {?>
                                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
upload/<?php echo $_smarty_tpl->tpl_vars['aneRes']->value['ANE_arquivo'];?>
"
                                                                            class="btn btn-default btn-block clearfix"
                                                                            data-lightbox="roadtrip"><img
                                                                                src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
upload/<?php echo $_smarty_tpl->tpl_vars['aneRes']->value['ANE_arquivo'];?>
"
                                                                                width="100%"></a>
                                                                    <?php }?>
                                                                </li>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                        </ul>
                                                    </div>
                                                    <!-- /.card-body -->
                                                <?php }?>
                                            </div>
                                            <!-- /.comment-text -->
                                        </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </div>
                            <!-- /.Respostas -->
                        </div>
                        <div class="tab-pane fade" id="historico-chat" role="tabpanel" aria-labelledby="historico-chat-tab">
                            <div class="msg">
                                <div class="direct-chat-msg left">
                                    <div class="direct-chat-infos clearfix"><span
                                            class="direct-chat-name float-left">Suporte</span><span
                                            class="direct-chat-timestamp float-right">01/08/2021 19:37:47Hs</span></div>
                                    <img class="direct-chat-img" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
views/painel/dist/img/aro-logo.png"
                                        alt="Suporte">
                                    <div class="direct-chat-text">Olá, breve irei lhe atender. Por favor aguarde um
                                        momento.</div>
                                </div>
                                <div class="direct-chat-msg right">
                                    <div class="direct-chat-infos clearfix"><span
                                            class="direct-chat-name float-left">Suporte</span><span
                                            class="direct-chat-timestamp float-right">01/08/2021 19:37:47Hs</span></div>
                                    <img class="direct-chat-img" src="<?php echo $_smarty_tpl->tpl_vars['imagem']->value;?>
">
                                    <div class="direct-chat-text">Olá, breve irei lhe atender. Por favor aguarde um
                                        momento.</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="responder" role="tabpanel" aria-labelledby="responder-tab">

                            <!-- .Post Resposta -->
                            <div class="card-footer">
                                <form id="responder" action="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/protocolos/resposta" method="post"
                                    enctype="multipart/form-data">
                                    <input name="PRO_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['protocolo']->value['PRO_id'];?>
">

                                    <div class="clearfix">
                                        <div class="form-group float-left">
                                            <label>Ação</label>
                                            <select name="acao" class="form-control select2" style="width: 100%;">
                                                <?php if ((isset($_smarty_tpl->tpl_vars['listaStatus']->value))) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaStatus']->value, 'status', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['status']->value['STA_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['status']->value['STA_status'];?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="form-group float-right" style="padding: 0px 10px;">
                                            <label>Enviar email para usuário</label><br>
                                            <div class=" float-right">
                                                <input type="checkbox" name="enviar_email" checked data-bootstrap-switch
                                                    data-off-color="danger" data-on-color="success">
                                            </div>

                                        </div>
                                        <div class="form-group float-right" style="padding: 0px 10px;">
                                            <label>Visível para usuário</label><br>
                                            <div class=" float-right">
                                                <input type="checkbox" name="visivel" checked data-bootstrap-switch
                                                    data-off-color="danger" data-on-color="success">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="RES_texto">Resposta</label>

                                        <textarea rows="5" id="RES_texto" class="form-control" name="RES_texto"></textarea>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="form-group">
                                        <label for="RES_texto">Adicionar Anexos</label>

                                        <div class="file-loading">
                                            <input id="file-pt-BR" name="files[]" type="file" multiple>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary float-right">Enviar</button>
                                    </div>

                                </form>
                            </div>
                            <!-- /.Post Resposta -->
                        </div>

                    </div>
                </div>
            </div>




        </div>

    </div>

    <div class="modal fade" id="modal_atribuir">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Atribuir Protocolo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Multiple</label>
                        <select class="select2" multiple="multiple" data-placeholder="Atendentes" style="width: 100%;">
                            <?php if ((isset($_smarty_tpl->tpl_vars['atendentes']->value))) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['atendentes']->value, 'atend', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['atend']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['atend']->value) {
$_smarty_tpl->tpl_vars['atend']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['atend']->value['USU_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['atend']->value['USU_nome'];?>
 [<?php echo $_smarty_tpl->tpl_vars['atend']->value['DEP_titulo'];?>
]</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success" id="excluir-sim">Salvar</button>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/ckeditor/examples/styles.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/css/cropper.css">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/inputfile/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/lightbox/css/lightbox.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/custom-icon/icons-svg.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
dist/css/custom.css">

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/lightbox/js/lightbox.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/inputfile/js/fileinput.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/inputfile/js/pt-BR.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/ckeditor/build/ckeditor.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/select2/js/select2.full.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/bootstrap-switch/js/bootstrap-switch.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/inputfile/js/theme.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $("#responder").submit(function() {
            return validacao();
        });

        $(document).ready(function() {
            $('.select2').select2()

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

            $('#file-pt-BR').fileinput({
                theme: 'fas',
                language: 'pt-BR',
                browseOnZoneClick: true,
                showRemove: false,
                showUpload: false,
                allowedFileExtensions: ['jpg', 'jpeg', 'png', 'gif', 'xls', 'xlsx', 'doc', 'docx', 'pdf',
                    'xml', 'zip', 'rar'
                ],
                previewFileIconSettings: {
                    'doc': '<i class="fa fa-file-word text-primary"></i>',
                    'docx': '<i class="fa fa-file-word text-primary"></i>',
                    'xls': '<i class="fa fa-file-excel text-success"></i>',
                    'xlsx': '<i class="fa fa-file-excel text-success"></i>',
                    'pdf': '<i class="fa file-pdf text-danger"></i>',
                    'xml': '<i class="fa file-xml text-success"></i>',
                    'zip': '<i class="fa fa-file-archive text-muted"></i>',
                    'rar': '<i class="fa fa-file-archive text-muted"></i>'
                },
                slugCallback: function(filename) {
                    return filename.replace('(', '_').replace(']', '_');
                }
            });
            $('body').on('paste', function(eventObj) {
                $('#file-pt-BR').fileinput('paste',
                    eventObj); // copies files or images data in clipboard
            });


        });

        window.onload = function() {
            $("#chamado-tab").addClass('active');
        };

        ClassicEditor
            .create(document.querySelector('#RES_texto'), {
                toolbar: {
                    items: [
                        'heading',
                        '|',
                        'bold',
                        'italic',
                        'link',
                        'bulletedList',
                        'numberedList',
                        '|',
                        'outdent',
                        'indent',
                        '|'
                    ]
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
                        'mergeTableCells'
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
                console.warn('Build id: 8gu4f69zasvi-1abbksipscam');
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
}
