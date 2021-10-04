<?php
/* Smarty version 3.1.39, created on 2021-09-25 17:22:18
  from 'C:\xampp\htdocs\modulos\painel\views\editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614f84fab74537_51899718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ed4acfbf59a210bf4ee54ebb4a3fd1da9e8d3c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modulos\\painel\\views\\editor.tpl',
      1 => 1632600464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614f84fab74537_51899718 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    #salvar:hover {
        color: green;
    }
</style>
<div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form method="post" id="consulta">
                <div class="modal-body">
                    <nav class="navbar navbar-expand navbar-light">
                        <!-- Left navbar links -->
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['consulta_personalizada']->value['CON_id'];?>
" name="CON_id" />

                        <input id="titulo" name="CON_titulo" value="<?php echo $_smarty_tpl->tpl_vars['consulta_personalizada']->value['CON_titulo'];?>
"
                            class="form-control" placeholder="Titulo da Consulta" type="text"
                            style="margin-left: -7px; width:80%" />

                        <!-- Right navbar links -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Notifications Dropdown Menu -->
                            <li class="nav-item">
                                <a class="nav-link" id="salvar" title="Salvar" href="#" role="button"><i
                                        class="fas fa-save"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" title="Fullscreen" data-widget="fullscreen" href="#" role="button">
                                    <i class="fas fa-expand-arrows-alt"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" title="Fechar" data-dismiss="modal" aria-label="Close" href="#"
                                    role="button">
                                    <i class="fas fa-times"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="SQL-tab" data-toggle="pill" href="#SQL" role="tab"
                                aria-controls="SQL" aria-selected="true">SQL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="JAVASCRIPT-tab" data-toggle="pill" href="#JAVASCRIPT" role="tab"
                                aria-controls="JAVASCRIPT" aria-selected="false">JAVASCRIPT</a>
                        </li>

                    </ul>
                    <div class="custom-control custom-switch custom-switch-on-success float-right"
                        style="margin-top: -25px;">
                        <input type="checkbox" class="custom-control-input" id="tema" checked>
                        <label class="custom-control-label" for="tema">Tema Dark</label>
                    </div>
                    <div class="tab-content" id="custom-content-below-tabContent">
                        <div class="tab-pane fade show active" id="SQL" role="tabpanel" aria-labelledby="SQL-tab">

                            <div class="form-group">
                                <div id="editor-sql"></div>
                                <textarea id="CON_sql"
                                    style="display:none;"><?php echo $_smarty_tpl->tpl_vars['consulta_personalizada']->value['CON_sql'];?>
</textarea>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="JAVASCRIPT" role="tabpanel" aria-labelledby="JAVASCRIPT-tab">

                            <div class="form-group">
                                <div id="editor-javascript"></div>
                                <textarea id="CON_javascript"
                                    style="display:none;"><?php echo $_smarty_tpl->tpl_vars['consulta_personalizada']->value['CON_javascript'];?>
</textarea>
                            </div>

                        </div>

                    </div>

                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php echo '<script'; ?>
>
    function loadEditor() {
        require(['vs/editor/editor.main'], () => {

                <?php if ((isset($_smarty_tpl->tpl_vars['tema']->value))) {?>
                    var tema_editor = '<?php echo $_smarty_tpl->tpl_vars['tema']->value;?>
';
                    <?php if ($_smarty_tpl->tpl_vars['tema']->value == 'vs') {?>
                        $("#tema").prop("checked", false);
                    <?php }?>
                <?php } else { ?>
                    var tema_editor = 'vs-dark';
                <?php }?>

                //-------------- EDITOR SQL --------------------//
                var edit_sql = document.getElementById("editor-sql");
                edit_sql.style.minHeight =
                    '480px';
                edit_sql.style.height = '100%';
                edit_sql.style.width = '100%';

                var codigo_sql = $('#CON_sql').val() == '' ? "\n-- Escreva seu código aqui :)" : $(
                    '#CON_sql').val();




                const editor_sql = monaco.editor;
                var sql = editor_sql.create(edit_sql, {
                    theme: tema_editor,
                    model: editor_sql.createModel(codigo_sql, "sql"),
                    minimap: {
                        enabled: true
                    },
                    scrollbar: {
                        vertical: 'auto'
                    },
                    language: "sql",
                    wordWrap: 'wordWrapColumn',
                    //wordWrapColumn: 40,
                    // Set this to false to not auto word wrap minified files
                    wordWrapMinified: true,
                    // try "same", "indent" or "none"
                    wrappingIndent: "indent",
                    autoIndent: true,
                    automaticLayout: true
                });

                //--------------------- EDITOR JAVASCRIPT ----------------------------/
                var edit_javascript = document.getElementById("editor-javascript");
                edit_javascript.style
                    .minHeight = '480px';
                edit_javascript.style.height = '100%';
                edit_javascript.style.width =
                    '100%';

                var CON_javascript = $('#CON_javascript').val() == '' ?
                    "\n // Escreva seu código aqui :)" : $(
                        '#CON_javascript').val();

                const editor_javascript = monaco.editor;

                var javascript = editor_javascript.create(edit_javascript, {
                    theme: tema_editor,
                    model: editor_javascript.createModel(CON_javascript, "javascript"),
                    minimap: {
                        enabled: true
                    },
                    scrollbar: {
                        vertical: 'auto'
                    },
                    language: "javascript",
                    wordWrap: 'wordWrapColumn',
                    //wordWrapColumn: 40,
                    wordWrapMinified: true,
                    wrappingIndent: "indent",
                    autoIndent: true,
                    automaticLayout: true
                });





                $("#tema").change(function() {
                        var newTheme = $(this).is(":checked") ? 'vs-dark' : 'vs';
                        monaco.editor.setTheme(newTheme);
                        $.get("<?php echo $_smarty_tpl->tpl_vars['_pgParams']->value['RAIZ'];?>
painel/dashboard/tema/"+newTheme,
                        function(data) {
                            $(document).Toasts('create', {
                                toast: true,
                                delay: 5000,
                                class: 'bg-success',
                                position: 'topRight',
                                autohide: true,
                                body: 'Thema Alterado para: ' + newTheme
                            });
                        });
                });

            const form = document.getElementById("consulta"); form.addEventListener("formdata", e => {
                e.formData.append('CON_sql', sql.getModel().getValue());
                e.formData.append('CON_javascript', javascript.getModel().getValue());
            });


        });
    }

    $(document).ready(function() {

        $("#salvar").click(function() {
            $('#consulta').submit();
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
