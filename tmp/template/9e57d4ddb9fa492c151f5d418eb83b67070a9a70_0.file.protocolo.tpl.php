<?php
/* Smarty version 3.1.39, created on 2021-09-04 18:51:41
  from 'C:\xampp\htdocs\sistemas\omegahelp\modulos\suporte\views\protocolo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6133ea6dc46795_82896641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e57d4ddb9fa492c151f5d418eb83b67070a9a70' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sistemas\\omegahelp\\modulos\\suporte\\views\\protocolo.tpl',
      1 => 1630787141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6133ea6dc46795_82896641 (Smarty_Internal_Template $_smarty_tpl) {
if (is_array($_smarty_tpl->tpl_vars['protocolo']->value)) {?>
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <div class="user-block">
                    <h5>Nº #<?php echo $_smarty_tpl->tpl_vars['protocolo']->value['PRO_id'];?>
</h5>
                </div>

                <!-- /.user-block -->
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" title="Mark as read">
                        <i class="far fa-circle"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="mailbox-read-info">
                <h3><b><?php echo $_smarty_tpl->tpl_vars['protocolo']->value['PRO_assunto'];?>
</b>
                    <span class="badge bg-<?php echo $_smarty_tpl->tpl_vars['protocolo']->value['STA_corHtml'];?>
  float-right"><?php echo $_smarty_tpl->tpl_vars['protocolo']->value['STA_status'];?>
</span>
                </h3>
                <h6>Depto: <b><?php echo $_smarty_tpl->tpl_vars['protocolo']->value['TIP_tipo'];?>
</b>
                    <span class="mailbox-read-time float-right"><?php echo $_smarty_tpl->tpl_vars['protocolo']->value['PRO_aberto'];?>
</span>
                </h6>
            </div>
            <div class="card-body">

                <?php echo $_smarty_tpl->tpl_vars['protocolo']->value['PRO_texto'];?>


                <div><span class="float-right text-muted"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['respostaQtd']->value)===null||$tmp==='' ? "0" : $tmp);?>
 Respostas</span></div>

            </div>

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
" alt="<?php echo $_smarty_tpl->tpl_vars['res']->value['USU_nome'];?>
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
                                                            <span class="mailbox-attachment-icon"><i class="far <?php echo $_smarty_tpl->tpl_vars['aneRes']->value['icone'];?>
"></i></span>
                                                        </a>
                                                    <?php } elseif ((isset($_smarty_tpl->tpl_vars['aneRes']->value['imagem']))) {?>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
upload/<?php echo $_smarty_tpl->tpl_vars['aneRes']->value['ANE_arquivo'];?>
"
                                                            class="btn btn-default btn-block clearfix" data-lightbox="roadtrip"><img
                                                                src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
upload/<?php echo $_smarty_tpl->tpl_vars['aneRes']->value['ANE_arquivo'];?>
" width="100%"></a>
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


        <!-- .Post Resposta -->
        <div class="card-footer">
            <form id="responder" action="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
suporte/protocolos/resposta" method="post"
                enctype="multipart/form-data">
                <input name="PRO_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['protocolo']->value['PRO_id'];?>
">

                <div class="form-group">
                    <div class="file-loading">
                        <input id="file-pt-BR" name="files[]" type="file" multiple>
                    </div>
                </div>
                <div class="form-group">
                    <textarea rows="5" id="RES_texto" class="form-control" name="RES_texto"></textarea>
                </div>
                <!-- /.card-body -->

                <div class="form-group">
                    <button type="submit" class="btn btn-primary float-right">Enviar</button>
                </div>

            </form>
        </div>
        <!-- /.Post Resposta -->
    </div>
    <div class="col-md-4">
        <div class="card card-outline card-warning direct-chat direct-chat-warning dark-mode collapsed-card">
            <div class="card-header">
                <h3 class="card-title"><b>Histórico do Chat</b></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" style="margin: 0;">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div id="ChatMensagens" class="direct-chat-messages">

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

            </div>

        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['anexos']->value)) && is_array($_smarty_tpl->tpl_vars['anexos']->value)) {?>
            <!-- .Anexos -->
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b><i class="fas fa-paperclip"></i> Anexos</b></h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" style="margin: 0;">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <ul class="mailbox-attachments d-flex align-items-stretch clearfix row">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['anexos']->value, 'arq');
$_smarty_tpl->tpl_vars['arq']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['arq']->value) {
$_smarty_tpl->tpl_vars['arq']->do_else = false;
?>
                            <li class="col-md-4 clearfix">
                                <?php if ((isset($_smarty_tpl->tpl_vars['arq']->value['icone']))) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
upload/<?php echo $_smarty_tpl->tpl_vars['arq']->value['ANE_arquivo'];?>
" class="btn btn-default btn-block"
                                        target="_blank">
                                        <span class="mailbox-attachment-icon"><i class="far <?php echo $_smarty_tpl->tpl_vars['arq']->value['icone'];?>
"></i></span>
                                    </a>
                                <?php } elseif ((isset($_smarty_tpl->tpl_vars['arq']->value['imagem']))) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
upload/<?php echo $_smarty_tpl->tpl_vars['arq']->value['ANE_arquivo'];?>
" data-lightbox="roadtrip"
                                        class="btn btn-default btn-block"><img src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
upload/<?php echo $_smarty_tpl->tpl_vars['arq']->value['ANE_arquivo'];?>
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
            </div>
            <!-- /.Anexos -->
        <?php }?>
    </div>
<?php }?>


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
plugins/inputfile/js/theme.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $("#responder").submit(function() {
        return validacao();
    });

    $(document).ready(function() {
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
