<?php
/* Smarty version 3.1.39, created on 2021-08-28 21:05:03
  from 'C:\xampp\htdocs\sistemas\omegahelp\modulos\suporte\views\novoprotocolo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612acf2f132d00_84713422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd69ac2bda32f7070bb8b79a5ca858f81c1f66e98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sistemas\\omegahelp\\modulos\\suporte\\views\\novoprotocolo.tpl',
      1 => 1630194727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612acf2f132d00_84713422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['_pgParams']->value['REAL_PATH'])."modulos/suporte/views/card-user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="col-md-9">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form id="arquivos" action='<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
suporte/protocolos/novo' method="post"
            enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Titulo da Ocorrência</label>
                        <input autocomplete="off" name="PRO_assunto" id="PRO_assunto" class="form-control">
                    </div>
                    <div class="form-group  col-md-6">
                        <label>Em qual parte do sistema?</label>
                        <select name="TIP_id" id="TIP_id" class="form-control  select2" style="width: 100%;">
                            <option value="">Escolha um tipo</option>
                            <?php if (is_array($_smarty_tpl->tpl_vars['tipos']->value) && (isset($_smarty_tpl->tpl_vars['tipos']->value))) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos']->value, 'tipo');
$_smarty_tpl->tpl_vars['tipo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
$_smarty_tpl->tpl_vars['tipo']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value['TIP_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tipo']->value['TIP_tipo'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="PRO_texto">Nos dê mais detalhes do ocorrido.</label>
                    <textarea rows="5" id="PRO_texto" class="form-control" name="PRO_texto"></textarea>

                </div>
                <div class="form-group">
                    <label>Envie-nos prints ou arquivos que demonstrem seu problema.</label>
                    <div class="file-loading">
                        <input id="file-pt-BR" name="files[]" type="file" multiple>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-right">Enviar</button>
                </div>
        </form>
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/select2/js/select2.full.min.js"><?php echo '</script'; ?>
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
    $("#arquivos").submit(function() {
        return validacao();
    });



    $('#TIP_id').select2();

    $(document).ready(function() {



        $('#file-pt-BR').fileinput({
            theme: 'fas',
            language: 'pt-BR',
            browseOnZoneClick: true,
            showRemove: true,
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
        .create(document.querySelector('#PRO_texto'), {
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
        var valida = unserialize($("#arquivos").serialize());
        var msg = '';

        if (valida.PRO_assunto == '') {
            valid = false;
            $("#PRO_assunto").attr('style', 'border:1px solid red;');
        } else {
            $("#PRO_assunto").removeAttr('style');
        }

        //alert(valida.TIP_id)
        if (valida.TIP_id == '') {
            valid = false;
            $(".selection>span").attr('style', 'border:1px solid red;');

        } else {
            $(".selection>span").removeAttr('style');
        }
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

    function unserialize(data) {
        data = data.split('&');
        var response = {};
        for (var k in data) {
            var newData = data[k].split('=');
            response[newData[0]] = newData[1];
        }
        return response;
    }
<?php echo '</script'; ?>
>
<?php }
}
