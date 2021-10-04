<?php
/* Smarty version 3.1.39, created on 2021-10-03 21:15:16
  from 'C:\xampp\htdocs\sistemas\omegahelp\modulos\painel\views\configuracoes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615a47948351c7_52286028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11629a5714333fa4e894c47ef57096024ff4b262' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sistemas\\omegahelp\\modulos\\painel\\views\\configuracoes.tpl',
      1 => 1633306507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615a47948351c7_52286028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sistemas\\omegahelp\\lbs\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/css/froala_editor.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/css/froala_style.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/css/plugins/code_view.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/css/plugins/draggable.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/css/plugins/colors.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/css/plugins/emoticons.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/css/plugins/image_manager.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/css/plugins/image.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/css/plugins/line_breaker.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/css/plugins/table.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/css/plugins/char_counter.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/css/plugins/video.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/css/plugins/fullscreen.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/css/plugins/file.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/css/plugins/quick_insert.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/css/plugins/help.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/css/third_party/spell_checker.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/css/plugins/special_characters.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/css/codemirror.min.css">

<style>
    table {
        table-layout: fixed !important;
    }
</style>

<div class="col-sm-12">
    <div class="card card-primary card-outline card-tabs">
        <div class="card-header p-0 pt-1 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="email-tab" data-toggle="pill" href="#email" role="tab"
                        aria-controls="email" aria-selected="true">Email</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-three-tabContent">
                <div class="tab-pane fade show active" id="email" role="tabpanel" aria-labelledby="email-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="post" action="" id="editor">
                                <div class="card-body">
                                    <div class="form-group clearfix">
                                        <label for="MOD_titulo" class="float-left">Titulo do Modelo de Email</label>
                                        <input name="MOD_titulo" type="text" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['modelo']->value['MOD_titulo'])===null||$tmp==='' ? '' : $tmp);?>
"
                                            class="form-control" id="MOD_titulo" required>
                                    </div>
                                    <div class="form-group clearfix">
                                        <textarea name="MOD_html" type="text" class="form-control"
                                            id="MOD_html"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['modelo']->value['MOD_html'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-right">Gravar</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titulo</th>
                                        <th>Data</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['modelos']->value))) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modelos']->value, 'mod');
$_smarty_tpl->tpl_vars['mod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mod']->value) {
$_smarty_tpl->tpl_vars['mod']->do_else = false;
?>
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['mod']->value['MOD_id'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['mod']->value['MOD_titulo'];?>
</td>
                                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mod']->value['MOD_data'],"%d/%m/%Y - %H:%M:%S");?>
</td>
                                                <td>
                                                    <!--<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['mod']->value['MOD_id'];?>
"
                                                        class="btn btn-danger float-right excluir" style="margin-right: 10px;"
                                                        data-toggle="modal" data-target="#modal_excluir">
                                                        <i class="fas fa-trash "></i>
                                                    </button>!-->
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/configuracoes/email/editar/<?php echo $_smarty_tpl->tpl_vars['mod']->value['MOD_id'];?>
"
                                                        class="btn btn-primary float-right" style="margin-right: 10px;">
                                                        <i class="fas fa-edit"></i>

                                                    </a>

                                                    <button type="button" class="btn btn-default  float-right"
                                                        style="margin-right: 10px;" data-toggle="modal"
                                                        data-target="#modal_<?php echo $_smarty_tpl->tpl_vars['mod']->value['MOD_id'];?>
">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <div class="modal fade" id="modal_<?php echo $_smarty_tpl->tpl_vars['mod']->value['MOD_id'];?>
">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['mod']->value['MOD_titulo'];?>
</h4>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <?php echo $_smarty_tpl->tpl_vars['mod']->value['MOD_html'];?>

                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                </td>

                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php }?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.card -->
    </div>
</div>


<div class="modal fade" id="modal_excluir">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Excluir Modelo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Deseja mesmo excluir este modelo de email?
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" id="excluir-sim">Excluir</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/codemirror.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/xml.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/purify.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/froala_editor.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/align.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/char_counter.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/code_beautifier.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/code_view.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/colors.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/draggable.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/emoticons.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/entities.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/file.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/font_size.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/font_family.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/fullscreen.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/image.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/image_manager.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/line_breaker.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/inline_style.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/link.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/lists.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/paragraph_format.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/paragraph_style.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/quick_insert.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/quote.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/table.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/save.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/url.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/video.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/help.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/print.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/third_party/spell_checker.min.js">
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/special_characters.min.js">
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/plugins/word_paste.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['path_layout'];?>
plugins/froala/js/languages/pt_br.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    (function() {
        new FroalaEditor("#MOD_html", {
            language: 'pt_br',
            events: {
                "image.beforeUpload": function(files) {
                    var editor = this;
                    if (files.length) {
                        // Create a File Reader.
                        var reader = new FileReader();
                        // Set the reader to insert images when they are loaded.
                        reader.onload = function(e) {
                            var result = e.target.result;
                            editor.image.insert(result, null, null, editor.image.get());
                        };
                        // Read image as base64.
                        reader.readAsDataURL(files[0]);
                    }
                    editor.popups.hideAll();
                    // Stop default upload chain.
                    return false;
                }
            }
        })
    })();

    var excluir;
    $(".excluir").click(function() {
        excluir = "<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/configuracoes/email/excluir/"+$(this).attr('id');
        $("#modal-excluir").modal(show);
    });

    $("#excluir-sim").click(function() {
        window.location.href = excluir;
    });
<?php echo '</script'; ?>
>
<?php }
}
